<?php

namespace AttachmentDownloader;

class AttachmentDownloader
{

    public $domainNameLocal = null;
    public $domainNameRemote = null;
    public $documentRoot = null;
    public $contentDir = null;
    public $urlToFile = null;

    public function __construct()
    {
        if(defined('DOWNLOAD_ATTACHMENTS') && DOWNLOAD_ATTACHMENTS == true) {
            add_action('init', array($this, 'init'));
            add_filter('wp_get_attachment_image_src', array($this, 'rewriteToLiveDomain'), 700, 4);
        }
    }

    public function init() {
        $this->domainNameLocal    = preg_replace("(^https?://)", "", get_home_url());
        $this->domainNameRemote   = str_replace(".dev", ".se", $this->domainNameLocal);
        $this->documentRoot       = str_replace($this->domainNameLocal, "", getcwd());
        $this->contentDir         = $this->documentRoot . WP_CONTENT_DIR;
    }

    public function rewriteToLiveDomain($url, $attachmentId = null, $size, $icon = false)
    {

        //Url to file
        $this->urlToFile = $url[0];

        //Bail early if is admin
        if (is_admin()) {
            return $url;
        }

        if (!$this->fileExistsLocally($url[0])) {
            $this->createRequiredPath($this->getLocalFilePath($this->urlToFile));
            copy(preg_replace('/'.preg_quote($this->domainNameLocal, '/').'/', $this->domainNameRemote, $this->urlToFile, 1), $this->getLocalFilePath($this->urlToFile));
        }

        return $url;
    }

    private function fileExistsLocally($url)
    {
        return file_exists($this->getLocalFilePath($url));
    }

    private function getLocalFilePath($url)
    {
        return $this->documentRoot . $this->removeProtocol($url);
    }

    private function removeProtocol($url) {
        return preg_replace("(^https?://)", "",$url);
    }

    public function createRequiredPath($fileName)
    {
        $pathName = pathinfo($fileName)['dirname'];
        if(!is_dir($pathName)) {
            mkdir($pathName, 0777, true);
        }
    }
}

new AttachmentDownloader();

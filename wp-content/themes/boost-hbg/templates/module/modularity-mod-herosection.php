<?php
    $fields = get_fields($module->ID);
?>
<div class="mod-herosection">
    <?php foreach ($fields['herosec-section'] as $section) : ?>
        <a href="<?php echo $section['target_url']; ?>">
            <style scoped>
                svg,
                svg * {
                    fill: <?php echo $section['icon_foreground']; ?>;
                }
            </style>
            <div class="mod-herosection-icon">
                <div class="mod-herosection-icon-symbol" style="background-color:<?php echo $section['icon_background']; ?>">
                    <?php echo \Municipio\Helper\Svg::extract($section['icon_svg']['url']); ?>
                </div>
            </div>

            <span class="mod-herosection-title"><?php echo $section['title']; ?></span>
        </a>
    <?php endforeach; ?>
</div>

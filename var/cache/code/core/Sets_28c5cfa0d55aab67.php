<?php
return array (
  'orderedSets' => 
  array (
    'typo3/fluid-styled-content' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'typo3/fluid-styled-content',
       'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:label',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.defaultHeaderType',
           'type' => 'int',
           'default' => 2,
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.defaultHeaderType',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.defaultHeaderType',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.shortcut.tables',
           'type' => 'string',
           'default' => 'tt_content',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.shortcut.tables',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.shortcut.tables',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.allowTags',
           'type' => 'string',
           'default' => 'a, abbr, acronym, address, article, aside, b, bdo, big, blockquote, br, caption, center, cite, code, col, colgroup, dd, del, dfn, dl, div, dt, em, figure, font, footer, header, h1, h2, h3, h4, h5, h6, hr, i, img, ins, kbd, label, li, link, mark, meta, nav, ol, p, pre, q, s, samp, sdfield, section, small, span, strike, strong, style, sub, sup, table, thead, tbody, tfoot, td, th, tr, title, tt, u, ul, var',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.allowTags',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.allowTags',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.image.lazyLoading',
           'type' => 'string',
           'default' => 'lazy',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.image.lazyLoading',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.image.lazyLoading',
           'readonly' => false,
           'enum' => 
          array (
            'lazy' => 'Lazy',
            'eager' => 'Eager',
            'auto' => 'Auto',
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.image.imageDecoding',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.image.imageDecoding',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.image.imageDecoding',
           'readonly' => false,
           'enum' => 
          array (
            'sync' => 'Sync',
            'async' => 'Asynchronous',
            'auto' => 'Auto',
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.maxW',
           'type' => 'int',
           'default' => 600,
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.maxW',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.maxW',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.maxWInText',
           'type' => 'int',
           'default' => 300,
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.maxWInText',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.maxWInText',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.columnSpacing',
           'type' => 'int',
           'default' => 10,
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.columnSpacing',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.columnSpacing',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.rowSpacing',
           'type' => 'int',
           'default' => 10,
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.rowSpacing',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.rowSpacing',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.textMargin',
           'type' => 'int',
           'default' => 10,
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.textMargin',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.textMargin',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.borderColor',
           'type' => 'color',
           'default' => '#000000',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.borderColor',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.borderColor',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        11 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.borderWidth',
           'type' => 'int',
           'default' => 2,
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.borderWidth',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.borderWidth',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        12 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.borderPadding',
           'type' => 'int',
           'default' => 0,
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.borderPadding',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.borderPadding',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        13 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.linkWrap.width',
           'type' => 'string',
           'default' => '800m',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.linkWrap.width',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.linkWrap.width',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        14 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.linkWrap.height',
           'type' => 'string',
           'default' => '600m',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.linkWrap.height',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.linkWrap.height',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        15 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.linkWrap.newWindow',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.linkWrap.newWindow',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.linkWrap.newWindow',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        16 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.linkWrap.lightboxEnabled',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.linkWrap.lightboxEnabled',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.linkWrap.lightboxEnabled',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        17 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.linkWrap.lightboxCssClass',
           'type' => 'string',
           'default' => 'lightbox',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.linkWrap.lightboxCssClass',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.linkWrap.lightboxCssClass',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        18 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.textmedia.linkWrap.lightboxRelAttribute',
           'type' => 'string',
           'default' => 'lightbox[{field:uid}]',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.textmedia.linkWrap.lightboxRelAttribute',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.textmedia.linkWrap.lightboxRelAttribute',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        19 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.links.extTarget',
           'type' => 'string',
           'default' => '_blank',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.links.extTarget',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.links.extTarget',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        20 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.content.links.keep',
           'type' => 'string',
           'default' => 'path',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.content.links.keep',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.content.links.keep',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.content',
           'tags' => 
          array (
          ),
        )),
        21 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.templates.templateRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.templates.templateRootPath',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.templates.templateRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.templates',
           'tags' => 
          array (
          ),
        )),
        22 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.templates.partialRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.templates.partialRootPath',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.templates.partialRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.templates',
           'tags' => 
          array (
          ),
        )),
        23 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'styles.templates.layoutRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.styles.templates.layoutRootPath',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:settings.description.styles.templates.layoutRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'fsc.templates',
           'tags' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'fsc',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:categories.fsc',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:categories.description.fsc',
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'fsc.templates',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:categories.fsc.templates',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:categories.description.fsc.templates',
           'icon' => NULL,
           'parent' => 'fsc',
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'fsc.content',
           'label' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:categories.fsc.content',
           'description' => 'LLL:EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/labels.xlf:categories.description.fsc.content',
           'icon' => NULL,
           'parent' => 'fsc',
        )),
      ),
       'typoscript' => 'EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/',
       'pagets' => 'EXT:fluid_styled_content/Configuration/Sets/FluidStyledContent/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
    )),
    'typo3/fluid-styled-content-css' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'typo3/fluid-styled-content-css',
       'label' => 'Fluid Styled Content CSS',
       'dependencies' => 
      array (
        0 => 'typo3/fluid-styled-content',
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:fluid_styled_content/Configuration/Sets/FluidStyledContentCss/',
       'pagets' => 'EXT:fluid_styled_content/Configuration/Sets/FluidStyledContentCss/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
    )),
    'typo3/felogin' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'typo3/felogin',
       'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:label',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.pid',
           'type' => 'string',
           'default' => '0',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.pid',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.pid',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.recursive',
           'type' => 'string',
           'default' => '0',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.recursive',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.recursive',
           'readonly' => false,
           'enum' => 
          array (
            0 => '0',
            1 => '1',
            2 => '2',
            3 => '3',
            4 => '4',
            255 => '255',
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.showForgotPassword',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.showForgotPassword',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.showForgotPassword',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.showPermaLogin',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.showPermaLogin',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.showPermaLogin',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.showLogoutFormAfterLogin',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.showLogoutFormAfterLogin',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.showLogoutFormAfterLogin',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.emailFrom',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.emailFrom',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.emailFrom',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        6 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.emailFromName',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.emailFromName',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.emailFromName',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        7 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.replyToEmail',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.replyToEmail',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.replyToEmail',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        8 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.dateFormat',
           'type' => 'string',
           'default' => 'Y-m-d H:i',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.dateFormat',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.dateFormat',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        9 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.email.layoutRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.email.layoutRootPath',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.email.layoutRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        10 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.email.templateRootPath',
           'type' => 'string',
           'default' => 'EXT:felogin/Resources/Private/Email/Templates/',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.email.templateRootPath',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.email.templateRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        11 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.email.partialRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.email.partialRootPath',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.email.partialRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        12 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.email.templateName',
           'type' => 'string',
           'default' => 'PasswordRecovery',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.email.templateName',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.email.templateName',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        13 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.redirectMode',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.redirectMode',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.redirectMode',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        14 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.redirectFirstMethod',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.redirectFirstMethod',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.redirectFirstMethod',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        15 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.redirectPageLogin',
           'type' => 'int',
           'default' => 0,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.redirectPageLogin',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.redirectPageLogin',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        16 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.redirectPageLoginError',
           'type' => 'int',
           'default' => 0,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.redirectPageLoginError',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.redirectPageLoginError',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        17 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.redirectPageLogout',
           'type' => 'int',
           'default' => 0,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.redirectPageLogout',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.redirectPageLogout',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        18 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.redirectDisable',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.redirectDisable',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.redirectDisable',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        19 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.forgotLinkHashValidTime',
           'type' => 'int',
           'default' => 12,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.forgotLinkHashValidTime',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.forgotLinkHashValidTime',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        20 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.domains',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.domains',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.domains',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        21 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.exposeNonexistentUserInForgotPasswordDialog',
           'type' => 'bool',
           'default' => false,
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.exposeNonexistentUserInForgotPasswordDialog',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.exposeNonexistentUserInForgotPasswordDialog',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        22 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.view.templateRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.view.templateRootPath',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.view.templateRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        23 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.view.partialRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.view.partialRootPath',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.view.partialRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
        24 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'felogin.view.layoutRootPath',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.felogin.view.layoutRootPath',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:settings.description.felogin.view.layoutRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'felogin',
           'tags' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'felogin',
           'label' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:categories.felogin',
           'description' => 'LLL:EXT:felogin/Configuration/Sets/Felogin/labels.xlf:categories.description.felogin',
           'icon' => NULL,
           'parent' => NULL,
        )),
      ),
       'typoscript' => 'EXT:felogin/Configuration/Sets/Felogin/',
       'pagets' => 'EXT:felogin/Configuration/Sets/Felogin/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
    )),
    'typo3/form' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'typo3/form',
       'label' => 'Form Framework',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
      ),
       'categoryDefinitions' => 
      array (
      ),
       'typoscript' => 'EXT:form/Configuration/Sets/Form/',
       'pagets' => 'EXT:form/Configuration/Sets/Form/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
    )),
    'typo3/seo-sitemap' => 
    \TYPO3\CMS\Core\Site\Set\SetDefinition::__set_state(array(
       'name' => 'typo3/seo-sitemap',
       'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:label',
       'dependencies' => 
      array (
      ),
       'optionalDependencies' => 
      array (
      ),
       'settingsDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'seo.sitemap.view.templateRootPath',
           'type' => 'string',
           'default' => 'EXT:seo/Resources/Private/Templates/',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.seo.sitemap.view.templateRootPath',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.description.seo.sitemap.view.templateRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'seo.templates',
           'tags' => 
          array (
          ),
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'seo.sitemap.view.partialRootPath',
           'type' => 'string',
           'default' => 'EXT:seo/Resources/Private/Partials/',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.seo.sitemap.view.partialRootPath',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.description.seo.sitemap.view.partialRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'seo.templates',
           'tags' => 
          array (
          ),
        )),
        2 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'seo.sitemap.view.layoutRootPath',
           'type' => 'string',
           'default' => 'EXT:seo/Resources/Private/Layouts/',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.seo.sitemap.view.layoutRootPath',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.description.seo.sitemap.view.layoutRootPath',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'seo.templates',
           'tags' => 
          array (
          ),
        )),
        3 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'seo.sitemap.pages.excludedDoktypes',
           'type' => 'string',
           'default' => '3, 4, 6, 7, 199, 254',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.seo.sitemap.pages.excludedDoktypes',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.description.seo.sitemap.pages.excludedDoktypes',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'seo',
           'tags' => 
          array (
          ),
        )),
        4 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'seo.sitemap.pages.excludePagesRecursive',
           'type' => 'string',
           'default' => '',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.seo.sitemap.pages.excludePagesRecursive',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.description.seo.sitemap.pages.excludePagesRecursive',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'seo',
           'tags' => 
          array (
          ),
        )),
        5 => 
        \TYPO3\CMS\Core\Settings\SettingDefinition::__set_state(array(
           'key' => 'seo.sitemap.pages.additionalWhere',
           'type' => 'string',
           'default' => '{#no_index} = 0 AND {#canonical_link} = \'\'',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.seo.sitemap.pages.additionalWhere',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:settings.description.seo.sitemap.pages.additionalWhere',
           'readonly' => false,
           'enum' => 
          array (
          ),
           'category' => 'seo',
           'tags' => 
          array (
          ),
        )),
      ),
       'categoryDefinitions' => 
      array (
        0 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'seo',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:categories.seo',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:categories.description.seo',
           'icon' => NULL,
           'parent' => NULL,
        )),
        1 => 
        \TYPO3\CMS\Core\Settings\CategoryDefinition::__set_state(array(
           'key' => 'seo.templates',
           'label' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:categories.seo.templates',
           'description' => 'LLL:EXT:seo/Configuration/Sets/Sitemap/labels.xlf:categories.description.seo.templates',
           'icon' => NULL,
           'parent' => 'seo',
        )),
      ),
       'typoscript' => 'EXT:seo/Configuration/Sets/Sitemap/',
       'pagets' => 'EXT:seo/Configuration/Sets/Sitemap/page.tsconfig',
       'settings' => 
      array (
      ),
       'hidden' => false,
    )),
  ),
  'invalidSets' => 
  array (
  ),
);
#
<?php
return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
    $o = [
        clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['TYPO3\\CMS\\ContentBlocks\\Definition\\TableDefinitionCollection'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('TYPO3\\CMS\\ContentBlocks\\Definition\\TableDefinitionCollection')),
        clone ($p['TYPO3\\CMS\\ContentBlocks\\Registry\\AutomaticLanguageKeysRegistry'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('TYPO3\\CMS\\ContentBlocks\\Registry\\AutomaticLanguageKeysRegistry')),
    ],
    null,
    [
        'TYPO3\\CMS\\ContentBlocks\\Definition\\TableDefinitionCollection' => [
            'automaticLanguageKeysRegistry' => [
                $o[1],
            ],
        ],
    ],
    $o[0],
    []
);
#
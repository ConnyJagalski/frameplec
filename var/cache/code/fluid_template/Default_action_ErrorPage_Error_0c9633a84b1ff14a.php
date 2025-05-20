<?php
class Default_action_ErrorPage_Error_0c9633a84b1ff14a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'';
    }
    public function hasLayout(): bool {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'cb' => 
  array (
    0 => 'TYPO3\\CMS\\ContentBlocks\\ViewHelpers',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title')]);

$output0 .= '</title>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return '<style>
        body {
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212121;
            background-color: #f2f2f2;
            display: flex;
            margin: 0;
            padding: 2rem;
            align-items: center;
            justify-content: center;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
            min-height: 100dvh;
        }
        *,:after,:before {
            box-sizing: border-box
        }
        h1,p {
            margin-top: 0
        }
        a {
            text-decoration: underline;
            color: inherit
        }
        p {
            line-height: 1.5;
            margin-bottom: .5rem
        }
        .typo3-error-page-container {
            max-width: 600px;
            text-align: center
        }
        .typo3-error-page-statuscode {
            font-size: calc(6rem + 2vw);
            font-weight: 600;
            line-height: 1;
            margin-bottom: .5rem
        }
        .typo3-error-page-title {
            font-size: calc(1.5rem + .75vw);
            font-weight: 600;
            line-height: 1.2;
            margin-bottom: 1rem
        }
        .typo3-error-page-footer {
            margin-top: 4rem
        }
        .typo3-error-page-logo {
            width: 6rem;
            margin: 0 auto;
            height: auto;
            display: block;
            margin-bottom: 1rem
        }
        .typo3-error-page-copyright {
            font-size: .75rem;
            opacity: .75
        }
        .typo3-error-page-copyright a {
            color: inherit;
            text-decoration: none;
            font-weight: 600
        }
    </style>';
};

$arguments1 = [
'value' => NULL,
];

$output0 .= isset($arguments1['value']) ? $arguments1['value'] : $renderChildrenClosure2();

$output0 .= '
</head>
<body class="typo3-error-page">

    <div class="typo3-error-page-container">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array3 = [
'0' => $renderingContext->getVariableProvider()->getByPath('httpStatusCode'),
];

$expression4 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments6 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression4(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output5 = '';

$output5 .= '<div class="typo3-error-page-statuscode">
            ';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('httpStatusCode')]);

$output5 .= '
        </div>';
return $output5;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments6, $renderingContext)
;

$output0 .= '
        <h1 class="typo3-error-page-title">';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title')]);

$output0 .= '</h1>
        <p class="typo3-error-page-message">';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message')]);

$output0 .= '</p>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array7 = [
'0' => $renderingContext->getVariableProvider()->getByPath('errorCode'),
'1' => ' > 0',
];

$expression8 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};

$arguments10 = [
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression8(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output9 = '';

$output9 .= '
            <p class="typo3-error-page-message-help">More information regarding this error might be available <a href="';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('errorCodeUrlPrefix')]);

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('errorCode')]);

$output9 .= '" target="_blank" rel="noreferrer">online</a>.</p>
        ';
return $output9;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments10, $renderingContext)
;

$output0 .= '
        <p class="typo3-error-page-requestid">Request: ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('requestId')]);

$output0 .= '</p>
        <div class="typo3-error-page-footer">
            <svg class="typo3-error-page-logo" alt="TYPO3 logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 484 130"><path fill="#FF8700" d="M96.1 88.8c-1.9.6-3.4.8-5.4.8-16.2 0-39.9-56.5-39.9-75.3 0-6.9 1.6-9.2 4-11.2C35 5.3 11.2 12.6 3.6 21.8 2 24.1 1 27.7 1 32.4c0 29.4 31.3 96 53.4 96 10.3 0 27.5-16.9 41.7-39.6M85.8 1c20.4 0 40.9 3.3 40.9 14.8 0 23.4-14.9 51.8-22.4 51.8-13.5 0-30.4-37.6-30.4-56.4C73.9 2.7 77.2 1 85.8 1"/><path d="M195.3 42.5v86h-12v-86H162V32.1h54.4v10.5l-21.1-.1zm63.1 41.2v44.8H246V83.7L221.3 32h13.2l18.2 40.1L270.9 32h12.5l-25 51.7zm63.1 8.4h-11.6v36.4h-12V32.1s11.8-1 23.3-1c20.9 0 27 13 27 29.9 0 20.9-7.2 31.1-26.7 31.1zm1.4-51.1c-7.6 0-13 .8-13 .8V82h13c7.7 0 13.1-5.1 13.1-20.1-.1-13.7-3.4-20.9-13.1-20.9zm70 88.5c-22.7 0-28.8-16.5-28.8-50.3 0-32.4 6.1-48.1 28.8-48.1 22.7 0 28.8 15.7 28.8 48.1 0 33.7-6.1 50.3-28.8 50.3zm0-88.4c-12.4 0-16.5 8.4-16.5 38.7 0 29.6 4.1 39.5 16.5 39.5s16.5-9.9 16.5-39.5c0-30.2-4.1-38.7-16.5-38.7zm65.8 88.4c-6.7 0-16.8-2.1-18.1-2.3v-10.3c3.3.7 11.9 2.2 17.9 2.2 7 0 11.6-5.8 11.6-16.4 0-12.8-2.1-19.2-11.9-19.2H447V73.4h9.9c11.2 0 11.7-11.4 11.7-16.9 0-10.9-3.4-15.3-10.3-15.3-6.1 0-13 1.5-17 2.3V33.4c1.5-.3 9.6-2.3 16.7-2.3 14.2 0 22.3 6.1 22.3 26.6 0 9.4-2.9 17.6-10.5 20 9 1.2 12.1 10.1 12.1 23.6.1 20.5-7.9 28.2-23.2 28.2z"/></svg>
            <div class="typo3-error-page-copyright">
                TYPO3 is an open source content management system. To maintain the quality of the system and to improve it, please help us by <a href="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('donationUrl')]);

$output0 .= '" target="_blank" rel="noreferrer">donating</a>.
                Copyright &copy; ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('copyrightYear')]);

$output0 .= ' Kasper Skårhøj. Extensions are copyright of their respective owners. Go to <a href="https://typo3.org/" target="_blank" rel="noreferrer">typo3.org</a> for details.
            </div>
        </div>
    </div>

</body>

';

    return $output0;
}

}

#
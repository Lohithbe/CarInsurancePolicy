<?php

class partial_Content_LogEntries_c50550c45877137f1c5833c13f85858a5c846732 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
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
  'belog' => 
  array (
    0 => 'TYPO3\\CMS\\Belog\\ViewHelpers',
  ),
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
	<div>
		<h2>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['key'] = 'overview';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '
		</h2>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['htmlEscape'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['key'] = 'timeInfo';
// Rendering Array
$array11 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['date'] = NULL;
$arguments12['format'] = '';
$arguments12['base'] = NULL;
$output14 = '';
$array15 = array (
);
$output14 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array15);

$output14 .= ' ';
$array16 = array (
);
$output14 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array16);
$arguments12['format'] = $output14;
$output17 = '';

$output17 .= '@';
$array18 = array (
);
$output17 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array18);
$arguments12['date'] = $output17;
$renderChildrenClosure13 = $arguments12['date'] ? function() use ($arguments12) { return $arguments12['date']; } : $renderChildrenClosure13;$array11['0'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['date'] = NULL;
$arguments19['format'] = '';
$arguments19['base'] = NULL;
$output21 = '';
$array22 = array (
);
$output21 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array22);

$output21 .= ' ';
$array23 = array (
);
$output21 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array23);
$arguments19['format'] = $output21;
$output24 = '';

$output24 .= '@';
$array25 = array (
);
$output24 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array25);
$arguments19['date'] = $output24;
$renderChildrenClosure20 = $arguments19['date'] ? function() use ($arguments19) { return $arguments19['date']; } : $renderChildrenClosure20;$array11['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);
$arguments9['arguments'] = $array11;

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output6 .= '
		<p>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
					<br />
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['key'] = NULL;
$arguments36['id'] = NULL;
$arguments36['default'] = NULL;
$arguments36['htmlEscape'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['extensionName'] = NULL;
$arguments36['key'] = 'pagenameWithUID';
// Rendering Array
$array38 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['pid'] = NULL;
$arguments39['titleLimit'] = 20;
$array41 = array (
);$arguments39['pid'] = $renderingContext->getVariableProvider()->getByPath('pid', $array41);
$array38['0'] = TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);
$array42 = array (
);$array38['1'] = $renderingContext->getVariableProvider()->getByPath('pid', $array42);
$arguments36['arguments'] = $array38;

$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext)]);

$output35 .= '
				';
return $output35;
};
$arguments30 = array();
$arguments30['then'] = NULL;
$arguments30['else'] = NULL;
$arguments30['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array32 = array();
$array33 = array (
);$array32['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array33);
$array32['1'] = ' > 0';

$expression34 = function($context) {return (($context["node0"]) > 0);};
$arguments30['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)
					),
					$renderingContext
				);
$arguments30['__thenClosure'] = $renderChildrenClosure31;

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
			';
return $output29;
};
$arguments26 = array();
$arguments26['each'] = NULL;
$arguments26['as'] = NULL;
$arguments26['key'] = NULL;
$arguments26['reverse'] = false;
$arguments26['iteration'] = NULL;
$array28 = array (
);$arguments26['each'] = $renderingContext->getVariableProvider()->getByPath('groupedLogEntries', $array28);
$arguments26['as'] = 'pidEntry';
$arguments26['key'] = 'pid';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output6 .= '
		</p>
	</div>
';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.groupByPage', $array4);

$expression5 = function($context) {return ($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
	<div>
		<h2>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output243 = '';

$output243 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$output246 = '';

$output246 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$output333 = '';

$output333 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
$output336 = '';

$output336 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
$output342 = '';

$output342 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments343 = array();
$arguments343['key'] = NULL;
$arguments343['id'] = NULL;
$arguments343['default'] = NULL;
$arguments343['htmlEscape'] = NULL;
$arguments343['arguments'] = NULL;
$arguments343['extensionName'] = NULL;
$arguments343['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array345 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments346 = array();
$arguments346['key'] = NULL;
$arguments346['id'] = NULL;
$arguments346['default'] = NULL;
$arguments346['htmlEscape'] = NULL;
$arguments346['arguments'] = NULL;
$arguments346['extensionName'] = NULL;
$arguments346['key'] = 'forNonPageRelatedActions';
$array345['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments348 = array();
$arguments348['date'] = NULL;
$arguments348['format'] = '';
$arguments348['base'] = NULL;
$output350 = '';
$array351 = array (
);
$output350 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array351);

$output350 .= ' ';
$array352 = array (
);
$output350 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array352);
$arguments348['format'] = $output350;
$output353 = '';

$output353 .= '@';
$array354 = array (
);
$output353 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array354);
$arguments348['date'] = $output353;
$renderChildrenClosure349 = $arguments348['date'] ? function() use ($arguments348) { return $arguments348['date']; } : $renderChildrenClosure349;$array345['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments355 = array();
$arguments355['date'] = NULL;
$arguments355['format'] = '';
$arguments355['base'] = NULL;
$output357 = '';
$array358 = array (
);
$output357 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array358);

$output357 .= ' ';
$array359 = array (
);
$output357 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array359);
$arguments355['format'] = $output357;
$output360 = '';

$output360 .= '@';
$array361 = array (
);
$output360 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array361);
$arguments355['date'] = $output360;
$renderChildrenClosure356 = $arguments355['date'] ? function() use ($arguments355) { return $arguments355['date']; } : $renderChildrenClosure356;$array345['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext);
$arguments343['arguments'] = $array345;

$output342 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments343, $renderChildrenClosure344, $renderingContext)]);

$output342 .= '
							';
return $output342;
};
$arguments337 = array();
$arguments337['then'] = NULL;
$arguments337['else'] = NULL;
$arguments337['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array339 = array();
$array340 = array (
);$array339['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array340);
$array339['1'] = ' == -1';

$expression341 = function($context) {return (($context["node0"]) == -1);};
$arguments337['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression341(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array339)
					),
					$renderingContext
				);
$arguments337['__thenClosure'] = $renderChildrenClosure338;

$output336 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext);

$output336 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
$output367 = '';

$output367 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments368 = array();
$arguments368['key'] = NULL;
$arguments368['id'] = NULL;
$arguments368['default'] = NULL;
$arguments368['htmlEscape'] = NULL;
$arguments368['arguments'] = NULL;
$arguments368['extensionName'] = NULL;
$arguments368['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array370 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure372 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments371 = array();
$arguments371['key'] = NULL;
$arguments371['id'] = NULL;
$arguments371['default'] = NULL;
$arguments371['htmlEscape'] = NULL;
$arguments371['arguments'] = NULL;
$arguments371['extensionName'] = NULL;
$arguments371['key'] = 'forRootLevel';
$array370['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments371, $renderChildrenClosure372, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments373 = array();
$arguments373['date'] = NULL;
$arguments373['format'] = '';
$arguments373['base'] = NULL;
$output375 = '';
$array376 = array (
);
$output375 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array376);

$output375 .= ' ';
$array377 = array (
);
$output375 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array377);
$arguments373['format'] = $output375;
$output378 = '';

$output378 .= '@';
$array379 = array (
);
$output378 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array379);
$arguments373['date'] = $output378;
$renderChildrenClosure374 = $arguments373['date'] ? function() use ($arguments373) { return $arguments373['date']; } : $renderChildrenClosure374;$array370['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments380 = array();
$arguments380['date'] = NULL;
$arguments380['format'] = '';
$arguments380['base'] = NULL;
$output382 = '';
$array383 = array (
);
$output382 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array383);

$output382 .= ' ';
$array384 = array (
);
$output382 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array384);
$arguments380['format'] = $output382;
$output385 = '';

$output385 .= '@';
$array386 = array (
);
$output385 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array386);
$arguments380['date'] = $output385;
$renderChildrenClosure381 = $arguments380['date'] ? function() use ($arguments380) { return $arguments380['date']; } : $renderChildrenClosure381;$array370['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments380, $renderChildrenClosure381, $renderingContext);
$arguments368['arguments'] = $array370;

$output367 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext)]);

$output367 .= '
							';
return $output367;
};
$arguments362 = array();
$arguments362['then'] = NULL;
$arguments362['else'] = NULL;
$arguments362['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array364 = array();
$array365 = array (
);$array364['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array365);
$array364['1'] = ' == 0';

$expression366 = function($context) {return (($context["node0"]) == 0);};
$arguments362['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression366(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array364)
					),
					$renderingContext
				);
$arguments362['__thenClosure'] = $renderChildrenClosure363;

$output336 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext);

$output336 .= '
						';
return $output336;
};
$arguments334 = array();

$output333 .= '';

$output333 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
$output389 = '';

$output389 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
return '
								Nest view helpers three times:
								1. Feed pid as argument to be.pagePath
								2. Use this as argument for \'forPage\' translate
								3. Use this as argument for \'logForNonPageRelatedActionsOrRootLevelOrPage\' translate
							';
};
$arguments390 = array();

$output389 .= NULL;

$output389 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
$output394 = '';

$output394 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure396 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments395 = array();
$arguments395['key'] = NULL;
$arguments395['id'] = NULL;
$arguments395['default'] = NULL;
$arguments395['htmlEscape'] = NULL;
$arguments395['arguments'] = NULL;
$arguments395['extensionName'] = NULL;
$arguments395['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array397 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure399 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments398 = array();
$arguments398['key'] = NULL;
$arguments398['id'] = NULL;
$arguments398['default'] = NULL;
$arguments398['htmlEscape'] = NULL;
$arguments398['arguments'] = NULL;
$arguments398['extensionName'] = NULL;
$arguments398['key'] = 'forPage';
// Rendering Array
$array400 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments401 = array();
$arguments401['pid'] = NULL;
$arguments401['titleLimit'] = 20;
$array403 = array (
);$arguments401['pid'] = $renderingContext->getVariableProvider()->getByPath('pid', $array403);
$array400['0'] = TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments401, $renderChildrenClosure402, $renderingContext);
$array404 = array (
);$array400['1'] = $renderingContext->getVariableProvider()->getByPath('pid', $array404);
$arguments398['arguments'] = $array400;
$array397['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments398, $renderChildrenClosure399, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure406 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments405 = array();
$arguments405['date'] = NULL;
$arguments405['format'] = '';
$arguments405['base'] = NULL;
$output407 = '';
$array408 = array (
);
$output407 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array408);

$output407 .= ' ';
$array409 = array (
);
$output407 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array409);
$arguments405['format'] = $output407;
$output410 = '';

$output410 .= '@';
$array411 = array (
);
$output410 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array411);
$arguments405['date'] = $output410;
$renderChildrenClosure406 = $arguments405['date'] ? function() use ($arguments405) { return $arguments405['date']; } : $renderChildrenClosure406;$array397['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments412 = array();
$arguments412['date'] = NULL;
$arguments412['format'] = '';
$arguments412['base'] = NULL;
$output414 = '';
$array415 = array (
);
$output414 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array415);

$output414 .= ' ';
$array416 = array (
);
$output414 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array416);
$arguments412['format'] = $output414;
$output417 = '';

$output417 .= '@';
$array418 = array (
);
$output417 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array418);
$arguments412['date'] = $output417;
$renderChildrenClosure413 = $arguments412['date'] ? function() use ($arguments412) { return $arguments412['date']; } : $renderChildrenClosure413;$array397['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext);
$arguments395['arguments'] = $array397;

$output394 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments395, $renderChildrenClosure396, $renderingContext);

$output394 .= '
							';
return $output394;
};
$arguments392 = array();
$arguments392['value'] = NULL;

$output389 .= isset($arguments392['value']) ? $arguments392['value'] : $renderChildrenClosure393();

$output389 .= '
						';
return $output389;
};
$arguments387 = array();
$arguments387['if'] = NULL;

$output333 .= '';

$output333 .= '
					';
return $output333;
};
$arguments247 = array();
$arguments247['then'] = NULL;
$arguments247['else'] = NULL;
$arguments247['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array330 = array();
$array331 = array (
);$array330['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array331);
$array330['1'] = ' < 1';

$expression332 = function($context) {return (($context["node0"]) < 1);};
$arguments247['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression332(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array330)
					),
					$renderingContext
				);
$arguments247['__thenClosure'] = function() use ($renderingContext, $self) {
$output249 = '';

$output249 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
$output255 = '';

$output255 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['key'] = NULL;
$arguments256['id'] = NULL;
$arguments256['default'] = NULL;
$arguments256['htmlEscape'] = NULL;
$arguments256['arguments'] = NULL;
$arguments256['extensionName'] = NULL;
$arguments256['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array258 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments259 = array();
$arguments259['key'] = NULL;
$arguments259['id'] = NULL;
$arguments259['default'] = NULL;
$arguments259['htmlEscape'] = NULL;
$arguments259['arguments'] = NULL;
$arguments259['extensionName'] = NULL;
$arguments259['key'] = 'forNonPageRelatedActions';
$array258['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments261 = array();
$arguments261['date'] = NULL;
$arguments261['format'] = '';
$arguments261['base'] = NULL;
$output263 = '';
$array264 = array (
);
$output263 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array264);

$output263 .= ' ';
$array265 = array (
);
$output263 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array265);
$arguments261['format'] = $output263;
$output266 = '';

$output266 .= '@';
$array267 = array (
);
$output266 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array267);
$arguments261['date'] = $output266;
$renderChildrenClosure262 = $arguments261['date'] ? function() use ($arguments261) { return $arguments261['date']; } : $renderChildrenClosure262;$array258['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments268 = array();
$arguments268['date'] = NULL;
$arguments268['format'] = '';
$arguments268['base'] = NULL;
$output270 = '';
$array271 = array (
);
$output270 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array271);

$output270 .= ' ';
$array272 = array (
);
$output270 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array272);
$arguments268['format'] = $output270;
$output273 = '';

$output273 .= '@';
$array274 = array (
);
$output273 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array274);
$arguments268['date'] = $output273;
$renderChildrenClosure269 = $arguments268['date'] ? function() use ($arguments268) { return $arguments268['date']; } : $renderChildrenClosure269;$array258['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);
$arguments256['arguments'] = $array258;

$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext)]);

$output255 .= '
							';
return $output255;
};
$arguments250 = array();
$arguments250['then'] = NULL;
$arguments250['else'] = NULL;
$arguments250['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array252 = array();
$array253 = array (
);$array252['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array253);
$array252['1'] = ' == -1';

$expression254 = function($context) {return (($context["node0"]) == -1);};
$arguments250['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression254(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array252)
					),
					$renderingContext
				);
$arguments250['__thenClosure'] = $renderChildrenClosure251;

$output249 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output249 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments281 = array();
$arguments281['key'] = NULL;
$arguments281['id'] = NULL;
$arguments281['default'] = NULL;
$arguments281['htmlEscape'] = NULL;
$arguments281['arguments'] = NULL;
$arguments281['extensionName'] = NULL;
$arguments281['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array283 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments284 = array();
$arguments284['key'] = NULL;
$arguments284['id'] = NULL;
$arguments284['default'] = NULL;
$arguments284['htmlEscape'] = NULL;
$arguments284['arguments'] = NULL;
$arguments284['extensionName'] = NULL;
$arguments284['key'] = 'forRootLevel';
$array283['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments286 = array();
$arguments286['date'] = NULL;
$arguments286['format'] = '';
$arguments286['base'] = NULL;
$output288 = '';
$array289 = array (
);
$output288 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array289);

$output288 .= ' ';
$array290 = array (
);
$output288 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array290);
$arguments286['format'] = $output288;
$output291 = '';

$output291 .= '@';
$array292 = array (
);
$output291 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array292);
$arguments286['date'] = $output291;
$renderChildrenClosure287 = $arguments286['date'] ? function() use ($arguments286) { return $arguments286['date']; } : $renderChildrenClosure287;$array283['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments293 = array();
$arguments293['date'] = NULL;
$arguments293['format'] = '';
$arguments293['base'] = NULL;
$output295 = '';
$array296 = array (
);
$output295 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array296);

$output295 .= ' ';
$array297 = array (
);
$output295 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array297);
$arguments293['format'] = $output295;
$output298 = '';

$output298 .= '@';
$array299 = array (
);
$output298 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array299);
$arguments293['date'] = $output298;
$renderChildrenClosure294 = $arguments293['date'] ? function() use ($arguments293) { return $arguments293['date']; } : $renderChildrenClosure294;$array283['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);
$arguments281['arguments'] = $array283;

$output280 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext)]);

$output280 .= '
							';
return $output280;
};
$arguments275 = array();
$arguments275['then'] = NULL;
$arguments275['else'] = NULL;
$arguments275['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array277 = array();
$array278 = array (
);$array277['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array278);
$array277['1'] = ' == 0';

$expression279 = function($context) {return (($context["node0"]) == 0);};
$arguments275['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression279(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array277)
					),
					$renderingContext
				);
$arguments275['__thenClosure'] = $renderChildrenClosure276;

$output249 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output249 .= '
						';
return $output249;
};
$arguments247['__elseClosures'][] = function() use ($renderingContext, $self) {
$output300 = '';

$output300 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
return '
								Nest view helpers three times:
								1. Feed pid as argument to be.pagePath
								2. Use this as argument for \'forPage\' translate
								3. Use this as argument for \'logForNonPageRelatedActionsOrRootLevelOrPage\' translate
							';
};
$arguments301 = array();

$output300 .= NULL;

$output300 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$output305 = '';

$output305 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments306 = array();
$arguments306['key'] = NULL;
$arguments306['id'] = NULL;
$arguments306['default'] = NULL;
$arguments306['htmlEscape'] = NULL;
$arguments306['arguments'] = NULL;
$arguments306['extensionName'] = NULL;
$arguments306['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array308 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments309 = array();
$arguments309['key'] = NULL;
$arguments309['id'] = NULL;
$arguments309['default'] = NULL;
$arguments309['htmlEscape'] = NULL;
$arguments309['arguments'] = NULL;
$arguments309['extensionName'] = NULL;
$arguments309['key'] = 'forPage';
// Rendering Array
$array311 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments312 = array();
$arguments312['pid'] = NULL;
$arguments312['titleLimit'] = 20;
$array314 = array (
);$arguments312['pid'] = $renderingContext->getVariableProvider()->getByPath('pid', $array314);
$array311['0'] = TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext);
$array315 = array (
);$array311['1'] = $renderingContext->getVariableProvider()->getByPath('pid', $array315);
$arguments309['arguments'] = $array311;
$array308['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments316 = array();
$arguments316['date'] = NULL;
$arguments316['format'] = '';
$arguments316['base'] = NULL;
$output318 = '';
$array319 = array (
);
$output318 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array319);

$output318 .= ' ';
$array320 = array (
);
$output318 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array320);
$arguments316['format'] = $output318;
$output321 = '';

$output321 .= '@';
$array322 = array (
);
$output321 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array322);
$arguments316['date'] = $output321;
$renderChildrenClosure317 = $arguments316['date'] ? function() use ($arguments316) { return $arguments316['date']; } : $renderChildrenClosure317;$array308['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments323 = array();
$arguments323['date'] = NULL;
$arguments323['format'] = '';
$arguments323['base'] = NULL;
$output325 = '';
$array326 = array (
);
$output325 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array326);

$output325 .= ' ';
$array327 = array (
);
$output325 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array327);
$arguments323['format'] = $output325;
$output328 = '';

$output328 .= '@';
$array329 = array (
);
$output328 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array329);
$arguments323['date'] = $output328;
$renderChildrenClosure324 = $arguments323['date'] ? function() use ($arguments323) { return $arguments323['date']; } : $renderChildrenClosure324;$array308['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);
$arguments306['arguments'] = $array308;

$output305 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output305 .= '
							';
return $output305;
};
$arguments303 = array();
$arguments303['value'] = NULL;

$output300 .= isset($arguments303['value']) ? $arguments303['value'] : $renderChildrenClosure304();

$output300 .= '
						';
return $output300;
};

$output246 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output246 .= '
				';
return $output246;
};
$arguments244 = array();

$output243 .= '';

$output243 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
$output421 = '';

$output421 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments422 = array();
$arguments422['key'] = NULL;
$arguments422['id'] = NULL;
$arguments422['default'] = NULL;
$arguments422['htmlEscape'] = NULL;
$arguments422['arguments'] = NULL;
$arguments422['extensionName'] = NULL;
$arguments422['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array424 = array();
$array424['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments425 = array();
$arguments425['date'] = NULL;
$arguments425['format'] = '';
$arguments425['base'] = NULL;
$output427 = '';
$array428 = array (
);
$output427 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array428);

$output427 .= ' ';
$array429 = array (
);
$output427 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array429);
$arguments425['format'] = $output427;
$output430 = '';

$output430 .= '@';
$array431 = array (
);
$output430 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array431);
$arguments425['date'] = $output430;
$renderChildrenClosure426 = $arguments425['date'] ? function() use ($arguments425) { return $arguments425['date']; } : $renderChildrenClosure426;$array424['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments432 = array();
$arguments432['date'] = NULL;
$arguments432['format'] = '';
$arguments432['base'] = NULL;
$output434 = '';
$array435 = array (
);
$output434 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array435);

$output434 .= ' ';
$array436 = array (
);
$output434 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array436);
$arguments432['format'] = $output434;
$output437 = '';

$output437 .= '@';
$array438 = array (
);
$output437 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array438);
$arguments432['date'] = $output437;
$renderChildrenClosure433 = $arguments432['date'] ? function() use ($arguments432) { return $arguments432['date']; } : $renderChildrenClosure433;$array424['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext);
$arguments422['arguments'] = $array424;

$output421 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments422, $renderChildrenClosure423, $renderingContext)]);

$output421 .= '
				';
return $output421;
};
$arguments419 = array();
$arguments419['if'] = NULL;

$output243 .= '';

$output243 .= '
			';
return $output243;
};
$arguments47 = array();
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$arguments47['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array240 = array();
$array241 = array (
);$array240['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.groupByPage', $array241);

$expression242 = function($context) {return ($context["node0"]);};
$arguments47['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression242(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array240)
					),
					$renderingContext
				);
$arguments47['__thenClosure'] = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['key'] = NULL;
$arguments146['id'] = NULL;
$arguments146['default'] = NULL;
$arguments146['htmlEscape'] = NULL;
$arguments146['arguments'] = NULL;
$arguments146['extensionName'] = NULL;
$arguments146['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array148 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments149 = array();
$arguments149['key'] = NULL;
$arguments149['id'] = NULL;
$arguments149['default'] = NULL;
$arguments149['htmlEscape'] = NULL;
$arguments149['arguments'] = NULL;
$arguments149['extensionName'] = NULL;
$arguments149['key'] = 'forNonPageRelatedActions';
$array148['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['date'] = NULL;
$arguments151['format'] = '';
$arguments151['base'] = NULL;
$output153 = '';
$array154 = array (
);
$output153 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array154);

$output153 .= ' ';
$array155 = array (
);
$output153 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array155);
$arguments151['format'] = $output153;
$output156 = '';

$output156 .= '@';
$array157 = array (
);
$output156 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array157);
$arguments151['date'] = $output156;
$renderChildrenClosure152 = $arguments151['date'] ? function() use ($arguments151) { return $arguments151['date']; } : $renderChildrenClosure152;$array148['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['date'] = NULL;
$arguments158['format'] = '';
$arguments158['base'] = NULL;
$output160 = '';
$array161 = array (
);
$output160 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array161);

$output160 .= ' ';
$array162 = array (
);
$output160 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array162);
$arguments158['format'] = $output160;
$output163 = '';

$output163 .= '@';
$array164 = array (
);
$output163 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array164);
$arguments158['date'] = $output163;
$renderChildrenClosure159 = $arguments158['date'] ? function() use ($arguments158) { return $arguments158['date']; } : $renderChildrenClosure159;$array148['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);
$arguments146['arguments'] = $array148;

$output145 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext)]);

$output145 .= '
							';
return $output145;
};
$arguments140 = array();
$arguments140['then'] = NULL;
$arguments140['else'] = NULL;
$arguments140['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array143);
$array142['1'] = ' == -1';

$expression144 = function($context) {return (($context["node0"]) == -1);};
$arguments140['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array142)
					),
					$renderingContext
				);
$arguments140['__thenClosure'] = $renderChildrenClosure141;

$output139 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output139 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['key'] = NULL;
$arguments171['id'] = NULL;
$arguments171['default'] = NULL;
$arguments171['htmlEscape'] = NULL;
$arguments171['arguments'] = NULL;
$arguments171['extensionName'] = NULL;
$arguments171['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array173 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['key'] = NULL;
$arguments174['id'] = NULL;
$arguments174['default'] = NULL;
$arguments174['htmlEscape'] = NULL;
$arguments174['arguments'] = NULL;
$arguments174['extensionName'] = NULL;
$arguments174['key'] = 'forRootLevel';
$array173['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments176 = array();
$arguments176['date'] = NULL;
$arguments176['format'] = '';
$arguments176['base'] = NULL;
$output178 = '';
$array179 = array (
);
$output178 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array179);

$output178 .= ' ';
$array180 = array (
);
$output178 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array180);
$arguments176['format'] = $output178;
$output181 = '';

$output181 .= '@';
$array182 = array (
);
$output181 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array182);
$arguments176['date'] = $output181;
$renderChildrenClosure177 = $arguments176['date'] ? function() use ($arguments176) { return $arguments176['date']; } : $renderChildrenClosure177;$array173['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['date'] = NULL;
$arguments183['format'] = '';
$arguments183['base'] = NULL;
$output185 = '';
$array186 = array (
);
$output185 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array186);

$output185 .= ' ';
$array187 = array (
);
$output185 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array187);
$arguments183['format'] = $output185;
$output188 = '';

$output188 .= '@';
$array189 = array (
);
$output188 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array189);
$arguments183['date'] = $output188;
$renderChildrenClosure184 = $arguments183['date'] ? function() use ($arguments183) { return $arguments183['date']; } : $renderChildrenClosure184;$array173['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);
$arguments171['arguments'] = $array173;

$output170 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext)]);

$output170 .= '
							';
return $output170;
};
$arguments165 = array();
$arguments165['then'] = NULL;
$arguments165['else'] = NULL;
$arguments165['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array167 = array();
$array168 = array (
);$array167['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array168);
$array167['1'] = ' == 0';

$expression169 = function($context) {return (($context["node0"]) == 0);};
$arguments165['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression169(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array167)
					),
					$renderingContext
				);
$arguments165['__thenClosure'] = $renderChildrenClosure166;

$output139 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output139 .= '
						';
return $output139;
};
$arguments137 = array();

$output136 .= '';

$output136 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return '
								Nest view helpers three times:
								1. Feed pid as argument to be.pagePath
								2. Use this as argument for \'forPage\' translate
								3. Use this as argument for \'logForNonPageRelatedActionsOrRootLevelOrPage\' translate
							';
};
$arguments193 = array();

$output192 .= NULL;

$output192 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments198 = array();
$arguments198['key'] = NULL;
$arguments198['id'] = NULL;
$arguments198['default'] = NULL;
$arguments198['htmlEscape'] = NULL;
$arguments198['arguments'] = NULL;
$arguments198['extensionName'] = NULL;
$arguments198['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array200 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['key'] = NULL;
$arguments201['id'] = NULL;
$arguments201['default'] = NULL;
$arguments201['htmlEscape'] = NULL;
$arguments201['arguments'] = NULL;
$arguments201['extensionName'] = NULL;
$arguments201['key'] = 'forPage';
// Rendering Array
$array203 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments204 = array();
$arguments204['pid'] = NULL;
$arguments204['titleLimit'] = 20;
$array206 = array (
);$arguments204['pid'] = $renderingContext->getVariableProvider()->getByPath('pid', $array206);
$array203['0'] = TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);
$array207 = array (
);$array203['1'] = $renderingContext->getVariableProvider()->getByPath('pid', $array207);
$arguments201['arguments'] = $array203;
$array200['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments208 = array();
$arguments208['date'] = NULL;
$arguments208['format'] = '';
$arguments208['base'] = NULL;
$output210 = '';
$array211 = array (
);
$output210 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array211);

$output210 .= ' ';
$array212 = array (
);
$output210 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array212);
$arguments208['format'] = $output210;
$output213 = '';

$output213 .= '@';
$array214 = array (
);
$output213 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array214);
$arguments208['date'] = $output213;
$renderChildrenClosure209 = $arguments208['date'] ? function() use ($arguments208) { return $arguments208['date']; } : $renderChildrenClosure209;$array200['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['date'] = NULL;
$arguments215['format'] = '';
$arguments215['base'] = NULL;
$output217 = '';
$array218 = array (
);
$output217 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array218);

$output217 .= ' ';
$array219 = array (
);
$output217 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array219);
$arguments215['format'] = $output217;
$output220 = '';

$output220 .= '@';
$array221 = array (
);
$output220 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array221);
$arguments215['date'] = $output220;
$renderChildrenClosure216 = $arguments215['date'] ? function() use ($arguments215) { return $arguments215['date']; } : $renderChildrenClosure216;$array200['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);
$arguments198['arguments'] = $array200;

$output197 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output197 .= '
							';
return $output197;
};
$arguments195 = array();
$arguments195['value'] = NULL;

$output192 .= isset($arguments195['value']) ? $arguments195['value'] : $renderChildrenClosure196();

$output192 .= '
						';
return $output192;
};
$arguments190 = array();
$arguments190['if'] = NULL;

$output136 .= '';

$output136 .= '
					';
return $output136;
};
$arguments50 = array();
$arguments50['then'] = NULL;
$arguments50['else'] = NULL;
$arguments50['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array133 = array();
$array134 = array (
);$array133['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array134);
$array133['1'] = ' < 1';

$expression135 = function($context) {return (($context["node0"]) < 1);};
$arguments50['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression135(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array133)
					),
					$renderingContext
				);
$arguments50['__thenClosure'] = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['key'] = NULL;
$arguments59['id'] = NULL;
$arguments59['default'] = NULL;
$arguments59['htmlEscape'] = NULL;
$arguments59['arguments'] = NULL;
$arguments59['extensionName'] = NULL;
$arguments59['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array61 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['key'] = NULL;
$arguments62['id'] = NULL;
$arguments62['default'] = NULL;
$arguments62['htmlEscape'] = NULL;
$arguments62['arguments'] = NULL;
$arguments62['extensionName'] = NULL;
$arguments62['key'] = 'forNonPageRelatedActions';
$array61['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['date'] = NULL;
$arguments64['format'] = '';
$arguments64['base'] = NULL;
$output66 = '';
$array67 = array (
);
$output66 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array67);

$output66 .= ' ';
$array68 = array (
);
$output66 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array68);
$arguments64['format'] = $output66;
$output69 = '';

$output69 .= '@';
$array70 = array (
);
$output69 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array70);
$arguments64['date'] = $output69;
$renderChildrenClosure65 = $arguments64['date'] ? function() use ($arguments64) { return $arguments64['date']; } : $renderChildrenClosure65;$array61['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['date'] = NULL;
$arguments71['format'] = '';
$arguments71['base'] = NULL;
$output73 = '';
$array74 = array (
);
$output73 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array74);

$output73 .= ' ';
$array75 = array (
);
$output73 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array75);
$arguments71['format'] = $output73;
$output76 = '';

$output76 .= '@';
$array77 = array (
);
$output76 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array77);
$arguments71['date'] = $output76;
$renderChildrenClosure72 = $arguments71['date'] ? function() use ($arguments71) { return $arguments71['date']; } : $renderChildrenClosure72;$array61['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);
$arguments59['arguments'] = $array61;

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output58 .= '
							';
return $output58;
};
$arguments53 = array();
$arguments53['then'] = NULL;
$arguments53['else'] = NULL;
$arguments53['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array55 = array();
$array56 = array (
);$array55['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array56);
$array55['1'] = ' == -1';

$expression57 = function($context) {return (($context["node0"]) == -1);};
$arguments53['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression57(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)
					),
					$renderingContext
				);
$arguments53['__thenClosure'] = $renderChildrenClosure54;

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['key'] = NULL;
$arguments84['id'] = NULL;
$arguments84['default'] = NULL;
$arguments84['htmlEscape'] = NULL;
$arguments84['arguments'] = NULL;
$arguments84['extensionName'] = NULL;
$arguments84['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array86 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['key'] = NULL;
$arguments87['id'] = NULL;
$arguments87['default'] = NULL;
$arguments87['htmlEscape'] = NULL;
$arguments87['arguments'] = NULL;
$arguments87['extensionName'] = NULL;
$arguments87['key'] = 'forRootLevel';
$array86['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['date'] = NULL;
$arguments89['format'] = '';
$arguments89['base'] = NULL;
$output91 = '';
$array92 = array (
);
$output91 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array92);

$output91 .= ' ';
$array93 = array (
);
$output91 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array93);
$arguments89['format'] = $output91;
$output94 = '';

$output94 .= '@';
$array95 = array (
);
$output94 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array95);
$arguments89['date'] = $output94;
$renderChildrenClosure90 = $arguments89['date'] ? function() use ($arguments89) { return $arguments89['date']; } : $renderChildrenClosure90;$array86['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['date'] = NULL;
$arguments96['format'] = '';
$arguments96['base'] = NULL;
$output98 = '';
$array99 = array (
);
$output98 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array99);

$output98 .= ' ';
$array100 = array (
);
$output98 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array100);
$arguments96['format'] = $output98;
$output101 = '';

$output101 .= '@';
$array102 = array (
);
$output101 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array102);
$arguments96['date'] = $output101;
$renderChildrenClosure97 = $arguments96['date'] ? function() use ($arguments96) { return $arguments96['date']; } : $renderChildrenClosure97;$array86['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);
$arguments84['arguments'] = $array86;

$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext)]);

$output83 .= '
							';
return $output83;
};
$arguments78 = array();
$arguments78['then'] = NULL;
$arguments78['else'] = NULL;
$arguments78['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array80 = array();
$array81 = array (
);$array80['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array81);
$array80['1'] = ' == 0';

$expression82 = function($context) {return (($context["node0"]) == 0);};
$arguments78['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression82(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)
					),
					$renderingContext
				);
$arguments78['__thenClosure'] = $renderChildrenClosure79;

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output52 .= '
						';
return $output52;
};
$arguments50['__elseClosures'][] = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return '
								Nest view helpers three times:
								1. Feed pid as argument to be.pagePath
								2. Use this as argument for \'forPage\' translate
								3. Use this as argument for \'logForNonPageRelatedActionsOrRootLevelOrPage\' translate
							';
};
$arguments104 = array();

$output103 .= NULL;

$output103 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['key'] = NULL;
$arguments109['id'] = NULL;
$arguments109['default'] = NULL;
$arguments109['htmlEscape'] = NULL;
$arguments109['arguments'] = NULL;
$arguments109['extensionName'] = NULL;
$arguments109['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array111 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['key'] = NULL;
$arguments112['id'] = NULL;
$arguments112['default'] = NULL;
$arguments112['htmlEscape'] = NULL;
$arguments112['arguments'] = NULL;
$arguments112['extensionName'] = NULL;
$arguments112['key'] = 'forPage';
// Rendering Array
$array114 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['pid'] = NULL;
$arguments115['titleLimit'] = 20;
$array117 = array (
);$arguments115['pid'] = $renderingContext->getVariableProvider()->getByPath('pid', $array117);
$array114['0'] = TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);
$array118 = array (
);$array114['1'] = $renderingContext->getVariableProvider()->getByPath('pid', $array118);
$arguments112['arguments'] = $array114;
$array111['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['date'] = NULL;
$arguments119['format'] = '';
$arguments119['base'] = NULL;
$output121 = '';
$array122 = array (
);
$output121 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array122);

$output121 .= ' ';
$array123 = array (
);
$output121 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array123);
$arguments119['format'] = $output121;
$output124 = '';

$output124 .= '@';
$array125 = array (
);
$output124 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array125);
$arguments119['date'] = $output124;
$renderChildrenClosure120 = $arguments119['date'] ? function() use ($arguments119) { return $arguments119['date']; } : $renderChildrenClosure120;$array111['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['date'] = NULL;
$arguments126['format'] = '';
$arguments126['base'] = NULL;
$output128 = '';
$array129 = array (
);
$output128 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array129);

$output128 .= ' ';
$array130 = array (
);
$output128 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array130);
$arguments126['format'] = $output128;
$output131 = '';

$output131 .= '@';
$array132 = array (
);
$output131 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array132);
$arguments126['date'] = $output131;
$renderChildrenClosure127 = $arguments126['date'] ? function() use ($arguments126) { return $arguments126['date']; } : $renderChildrenClosure127;$array111['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);
$arguments109['arguments'] = $array111;

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '
							';
return $output108;
};
$arguments106 = array();
$arguments106['value'] = NULL;

$output103 .= isset($arguments106['value']) ? $arguments106['value'] : $renderChildrenClosure107();

$output103 .= '
						';
return $output103;
};

$output49 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
				';
return $output49;
};
$arguments47['__elseClosures'][] = function() use ($renderingContext, $self) {
$output222 = '';

$output222 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments223 = array();
$arguments223['key'] = NULL;
$arguments223['id'] = NULL;
$arguments223['default'] = NULL;
$arguments223['htmlEscape'] = NULL;
$arguments223['arguments'] = NULL;
$arguments223['extensionName'] = NULL;
$arguments223['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array225 = array();
$array225['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['date'] = NULL;
$arguments226['format'] = '';
$arguments226['base'] = NULL;
$output228 = '';
$array229 = array (
);
$output228 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array229);

$output228 .= ' ';
$array230 = array (
);
$output228 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array230);
$arguments226['format'] = $output228;
$output231 = '';

$output231 .= '@';
$array232 = array (
);
$output231 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array232);
$arguments226['date'] = $output231;
$renderChildrenClosure227 = $arguments226['date'] ? function() use ($arguments226) { return $arguments226['date']; } : $renderChildrenClosure227;$array225['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['date'] = NULL;
$arguments233['format'] = '';
$arguments233['base'] = NULL;
$output235 = '';
$array236 = array (
);
$output235 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array236);

$output235 .= ' ';
$array237 = array (
);
$output235 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array237);
$arguments233['format'] = $output235;
$output238 = '';

$output238 .= '@';
$array239 = array (
);
$output238 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array239);
$arguments233['date'] = $output238;
$renderChildrenClosure234 = $arguments233['date'] ? function() use ($arguments233) { return $arguments233['date']; } : $renderChildrenClosure234;$array225['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);
$arguments223['arguments'] = $array225;

$output222 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext)]);

$output222 .= '
				';
return $output222;
};

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
		</h2>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
$output442 = '';

$output442 .= '
			<h3>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
$output446 = '';

$output446 .= '@';
$array447 = array (
);
$output446 .= $renderingContext->getVariableProvider()->getByPath('dayTimestamp', $array447);
return $output446;
};
$arguments443 = array();
$arguments443['date'] = NULL;
$arguments443['format'] = '';
$arguments443['base'] = NULL;
$array445 = array (
);$arguments443['format'] = $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array445);
$renderChildrenClosure444 = $arguments443['date'] ? function() use ($arguments443) { return $arguments443['date']; } : $renderChildrenClosure444;
$output442 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext)]);

$output442 .= '
			</h3>

			<div class="table-fit">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments448 = array();
$arguments448['key'] = NULL;
$arguments448['id'] = NULL;
$arguments448['default'] = NULL;
$arguments448['htmlEscape'] = NULL;
$arguments448['arguments'] = NULL;
$arguments448['extensionName'] = NULL;
$arguments448['key'] = 'chLog_l_error';

$output442 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext)]);

$output442 .= '
							</th>
							<th>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments450 = array();
$arguments450['key'] = NULL;
$arguments450['id'] = NULL;
$arguments450['default'] = NULL;
$arguments450['htmlEscape'] = NULL;
$arguments450['arguments'] = NULL;
$arguments450['extensionName'] = NULL;
$arguments450['key'] = 'chLog_l_time';

$output442 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext)]);

$output442 .= '
							</th>
							<th colspan="2">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure453 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments452 = array();
$arguments452['key'] = NULL;
$arguments452['id'] = NULL;
$arguments452['default'] = NULL;
$arguments452['htmlEscape'] = NULL;
$arguments452['arguments'] = NULL;
$arguments452['extensionName'] = NULL;
$arguments452['key'] = 'chLog_l_user';

$output442 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments452, $renderChildrenClosure453, $renderingContext)]);

$output442 .= '
							</th>
							<th>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
$output465 = '';

$output465 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
$output468 = '';

$output468 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure470 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments469 = array();
$arguments469['key'] = NULL;
$arguments469['id'] = NULL;
$arguments469['default'] = NULL;
$arguments469['htmlEscape'] = NULL;
$arguments469['arguments'] = NULL;
$arguments469['extensionName'] = NULL;
$arguments469['key'] = 'chLog_l_table';

$output468 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments469, $renderChildrenClosure470, $renderingContext)]);

$output468 .= '
									';
return $output468;
};
$arguments466 = array();

$output465 .= '';

$output465 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure472 = function() use ($renderingContext, $self) {
$output473 = '';

$output473 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure475 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments474 = array();
$arguments474['key'] = NULL;
$arguments474['id'] = NULL;
$arguments474['default'] = NULL;
$arguments474['htmlEscape'] = NULL;
$arguments474['arguments'] = NULL;
$arguments474['extensionName'] = NULL;
$arguments474['key'] = 'chLog_l_types';

$output473 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments474, $renderChildrenClosure475, $renderingContext)]);

$output473 .= '
									';
return $output473;
};
$arguments471 = array();
$arguments471['if'] = NULL;

$output465 .= '';

$output465 .= '
								';
return $output465;
};
$arguments454 = array();
$arguments454['then'] = NULL;
$arguments454['else'] = NULL;
$arguments454['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array462 = array();
$array463 = array (
);$array462['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.isInPageContext', $array463);

$expression464 = function($context) {return ($context["node0"]);};
$arguments454['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression464(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array462)
					),
					$renderingContext
				);
$arguments454['__thenClosure'] = function() use ($renderingContext, $self) {
$output456 = '';

$output456 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments457 = array();
$arguments457['key'] = NULL;
$arguments457['id'] = NULL;
$arguments457['default'] = NULL;
$arguments457['htmlEscape'] = NULL;
$arguments457['arguments'] = NULL;
$arguments457['extensionName'] = NULL;
$arguments457['key'] = 'chLog_l_table';

$output456 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext)]);

$output456 .= '
									';
return $output456;
};
$arguments454['__elseClosures'][] = function() use ($renderingContext, $self) {
$output459 = '';

$output459 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments460 = array();
$arguments460['key'] = NULL;
$arguments460['id'] = NULL;
$arguments460['default'] = NULL;
$arguments460['htmlEscape'] = NULL;
$arguments460['arguments'] = NULL;
$arguments460['extensionName'] = NULL;
$arguments460['key'] = 'chLog_l_types';

$output459 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext)]);

$output459 .= '
									';
return $output459;
};

$output442 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments454, $renderChildrenClosure455, $renderingContext);

$output442 .= '
							</th>
							<th>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments476 = array();
$arguments476['key'] = NULL;
$arguments476['id'] = NULL;
$arguments476['default'] = NULL;
$arguments476['htmlEscape'] = NULL;
$arguments476['arguments'] = NULL;
$arguments476['extensionName'] = NULL;
$arguments476['key'] = 'chLog_l_action';

$output442 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext)]);

$output442 .= '
							</th>
							<th>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments478 = array();
$arguments478['key'] = NULL;
$arguments478['id'] = NULL;
$arguments478['default'] = NULL;
$arguments478['htmlEscape'] = NULL;
$arguments478['arguments'] = NULL;
$arguments478['extensionName'] = NULL;
$arguments478['key'] = 'chLog_l_details';

$output442 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext)]);

$output442 .= '
							</th>
							<th>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments480 = array();
$arguments480['key'] = NULL;
$arguments480['id'] = NULL;
$arguments480['default'] = NULL;
$arguments480['htmlEscape'] = NULL;
$arguments480['arguments'] = NULL;
$arguments480['extensionName'] = NULL;
$arguments480['key'] = 'actions';

$output442 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext)]);

$output442 .= '
							</th>
						</tr>
					</thead>
					<tbody>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure483 = function() use ($renderingContext, $self) {
$output485 = '';

$output485 .= '
							<tr>
								<td>
									';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\ErrorIconViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments486 = array();
$arguments486['errorNumber'] = 0;
$array488 = array (
);$arguments486['errorNumber'] = $renderingContext->getVariableProvider()->getByPath('logItem.error', $array488);

$output485 .= TYPO3\CMS\Belog\ViewHelpers\ErrorIconViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);

$output485 .= '
								</td>
								<td>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure490 = function() use ($renderingContext, $self) {
$output491 = '';

$output491 .= '@';
$array492 = array (
);
$output491 .= $renderingContext->getVariableProvider()->getByPath('logItem.tstamp', $array492);
return $output491;
};
$arguments489 = array();
$arguments489['date'] = NULL;
$arguments489['format'] = '';
$arguments489['base'] = NULL;
$arguments489['format'] = 'H:i:s';
$renderChildrenClosure490 = $arguments489['date'] ? function() use ($arguments489) { return $arguments489['date']; } : $renderChildrenClosure490;
$output485 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments489, $renderChildrenClosure490, $renderingContext)]);

$output485 .= '
								</td>
								<td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure494 = function() use ($renderingContext, $self) {
$output500 = '';

$output500 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments501 = array();
$arguments501['backendUser'] = 0;
$arguments501['size'] = 32;
$arguments501['showIcon'] = false;
$array503 = array (
);$arguments501['backendUser'] = $renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array503);
// Rendering Boolean node
// Rendering Array
$array504 = array();
$array504['0'] = 'true';

$expression505 = function($context) {return TRUE;};
$arguments501['showIcon'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression505(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array504)
					),
					$renderingContext
				);

$output500 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments501, $renderChildrenClosure502, $renderingContext);

$output500 .= '
									';
return $output500;
};
$arguments493 = array();
$arguments493['then'] = NULL;
$arguments493['else'] = NULL;
$arguments493['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array495 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments496 = array();
$arguments496['uid'] = NULL;
$array498 = array (
);$arguments496['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array498);
$array495['0'] = TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext);

$expression499 = function($context) {return ($context["node0"]);};
$arguments493['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression499(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array495)
					),
					$renderingContext
				);
$arguments493['__thenClosure'] = $renderChildrenClosure494;

$output485 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments493, $renderChildrenClosure494, $renderingContext);

$output485 .= '
								</td>
								<td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
$output519 = '';

$output519 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
$output522 = '';

$output522 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure524 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments523 = array();
$arguments523['uid'] = NULL;
$array525 = array (
);$arguments523['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array525);

$output522 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments523, $renderChildrenClosure524, $renderingContext)]);

$output522 .= '
										';
return $output522;
};
$arguments520 = array();

$output519 .= '';

$output519 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
$output528 = '';

$output528 .= '[';
$array529 = array (
);
$output528 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array529)]);

$output528 .= ']';
return $output528;
};
$arguments526 = array();
$arguments526['if'] = NULL;

$output519 .= '';

$output519 .= '
									';
return $output519;
};
$arguments506 = array();
$arguments506['then'] = NULL;
$arguments506['else'] = NULL;
$arguments506['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array514 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure516 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments515 = array();
$arguments515['uid'] = NULL;
$array517 = array (
);$arguments515['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array517);
$array514['0'] = TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments515, $renderChildrenClosure516, $renderingContext);

$expression518 = function($context) {return ($context["node0"]);};
$arguments506['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression518(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array514)
					),
					$renderingContext
				);
$arguments506['__thenClosure'] = function() use ($renderingContext, $self) {
$output508 = '';

$output508 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments509 = array();
$arguments509['uid'] = NULL;
$array511 = array (
);$arguments509['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array511);

$output508 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments509, $renderChildrenClosure510, $renderingContext)]);

$output508 .= '
										';
return $output508;
};
$arguments506['__elseClosures'][] = function() use ($renderingContext, $self) {
$output512 = '';

$output512 .= '[';
$array513 = array (
);
$output512 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array513)]);

$output512 .= ']';
return $output512;
};

$output485 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments506, $renderChildrenClosure507, $renderingContext);

$output485 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure531 = function() use ($renderingContext, $self) {
$output535 = '';

$output535 .= '
										(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments536 = array();
$arguments536['key'] = NULL;
$arguments536['id'] = NULL;
$arguments536['default'] = NULL;
$arguments536['htmlEscape'] = NULL;
$arguments536['arguments'] = NULL;
$arguments536['extensionName'] = NULL;
$arguments536['key'] = 'viaUser';

$output535 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext)]);

$output535 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure539 = function() use ($renderingContext, $self) {
$output551 = '';

$output551 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure553 = function() use ($renderingContext, $self) {
$output554 = '';

$output554 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure556 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments555 = array();
$arguments555['uid'] = NULL;
$array557 = array (
);$arguments555['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser', $array557);

$output554 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments555, $renderChildrenClosure556, $renderingContext)]);

$output554 .= '
											';
return $output554;
};
$arguments552 = array();

$output551 .= '';

$output551 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure559 = function() use ($renderingContext, $self) {
$output560 = '';

$output560 .= '[';
$array561 = array (
);
$output560 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser', $array561)]);

$output560 .= ']';
return $output560;
};
$arguments558 = array();
$arguments558['if'] = NULL;

$output551 .= '';

$output551 .= '
										';
return $output551;
};
$arguments538 = array();
$arguments538['then'] = NULL;
$arguments538['else'] = NULL;
$arguments538['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array546 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure548 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments547 = array();
$arguments547['uid'] = NULL;
$array549 = array (
);$arguments547['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser', $array549);
$array546['0'] = TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments547, $renderChildrenClosure548, $renderingContext);

$expression550 = function($context) {return ($context["node0"]);};
$arguments538['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression550(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array546)
					),
					$renderingContext
				);
$arguments538['__thenClosure'] = function() use ($renderingContext, $self) {
$output540 = '';

$output540 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure542 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments541 = array();
$arguments541['uid'] = NULL;
$array543 = array (
);$arguments541['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser', $array543);

$output540 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments541, $renderChildrenClosure542, $renderingContext)]);

$output540 .= '
											';
return $output540;
};
$arguments538['__elseClosures'][] = function() use ($renderingContext, $self) {
$output544 = '';

$output544 .= '[';
$array545 = array (
);
$output544 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser', $array545)]);

$output544 .= ']';
return $output544;
};

$output535 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments538, $renderChildrenClosure539, $renderingContext);

$output535 .= '
										)
									';
return $output535;
};
$arguments530 = array();
$arguments530['then'] = NULL;
$arguments530['else'] = NULL;
$arguments530['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array532 = array();
$array533 = array (
);$array532['0'] = $renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser', $array533);

$expression534 = function($context) {return ($context["node0"]);};
$arguments530['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression534(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array532)
					),
					$renderingContext
				);
$arguments530['__thenClosure'] = $renderChildrenClosure531;

$output485 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments530, $renderChildrenClosure531, $renderingContext);

$output485 .= '
									<br>
									<span class="text-muted">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure563 = function() use ($renderingContext, $self) {
$output574 = '';

$output574 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper
$renderChildrenClosure578 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments577 = array();
$arguments577['uid'] = NULL;
$array579 = array (
);$arguments577['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.workspaceUid', $array579);
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper::renderStatic($arguments577, $renderChildrenClosure578, $renderingContext)]);
};
$arguments575 = array();

$output574 .= '';

$output574 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure581 = function() use ($renderingContext, $self) {
$output582 = '';

$output582 .= '[';
$array583 = array (
);
$output582 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.workspaceUid', $array583)]);

$output582 .= ']';
return $output582;
};
$arguments580 = array();
$arguments580['if'] = NULL;

$output574 .= '';

$output574 .= '
										';
return $output574;
};
$arguments562 = array();
$arguments562['then'] = NULL;
$arguments562['else'] = NULL;
$arguments562['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array569 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper
$renderChildrenClosure571 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments570 = array();
$arguments570['uid'] = NULL;
$array572 = array (
);$arguments570['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.workspaceUid', $array572);
$array569['0'] = TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper::renderStatic($arguments570, $renderChildrenClosure571, $renderingContext);

$expression573 = function($context) {return ($context["node0"]);};
$arguments562['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression573(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array569)
					),
					$renderingContext
				);
$arguments562['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper
$renderChildrenClosure565 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments564 = array();
$arguments564['uid'] = NULL;
$array566 = array (
);$arguments564['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.workspaceUid', $array566);
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper::renderStatic($arguments564, $renderChildrenClosure565, $renderingContext)]);
};
$arguments562['__elseClosures'][] = function() use ($renderingContext, $self) {
$output567 = '';

$output567 .= '[';
$array568 = array (
);
$output567 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.workspaceUid', $array568)]);

$output567 .= ']';
return $output567;
};

$output485 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments562, $renderChildrenClosure563, $renderingContext);

$output485 .= '
									</span>
								</td>
								<td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
$output619 = '';

$output619 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure621 = function() use ($renderingContext, $self) {
$output622 = '';

$output622 .= '
											';
$array623 = array (
);
$output622 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.tableName', $array623)]);

$output622 .= '
										';
return $output622;
};
$arguments620 = array();

$output619 .= '';

$output619 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure625 = function() use ($renderingContext, $self) {
$output626 = '';

$output626 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure628 = function() use ($renderingContext, $self) {
$output642 = '';

$output642 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure644 = function() use ($renderingContext, $self) {
$output645 = '';

$output645 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure647 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments646 = array();
$arguments646['key'] = NULL;
$arguments646['id'] = NULL;
$arguments646['default'] = NULL;
$arguments646['htmlEscape'] = NULL;
$arguments646['arguments'] = NULL;
$arguments646['extensionName'] = NULL;
$output648 = '';

$output648 .= 'type_';
$array649 = array (
);
$output648 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array649);
$arguments646['key'] = $output648;

$output645 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments646, $renderChildrenClosure647, $renderingContext)]);

$output645 .= '
												';
return $output645;
};
$arguments643 = array();

$output642 .= '';

$output642 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure651 = function() use ($renderingContext, $self) {
$output652 = '';

$output652 .= '
													[';
$array653 = array (
);
$output652 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.type', $array653)]);

$output652 .= ']
												';
return $output652;
};
$arguments650 = array();
$arguments650['if'] = NULL;

$output642 .= '';

$output642 .= '
											';
return $output642;
};
$arguments627 = array();
$arguments627['then'] = NULL;
$arguments627['else'] = NULL;
$arguments627['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array636 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure638 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments637 = array();
$arguments637['key'] = NULL;
$arguments637['id'] = NULL;
$arguments637['default'] = NULL;
$arguments637['htmlEscape'] = NULL;
$arguments637['arguments'] = NULL;
$arguments637['extensionName'] = NULL;
$output639 = '';

$output639 .= 'type_';
$array640 = array (
);
$output639 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array640);
$arguments637['key'] = $output639;
$array636['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments637, $renderChildrenClosure638, $renderingContext);

$expression641 = function($context) {return ($context["node0"]);};
$arguments627['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression641(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array636)
					),
					$renderingContext
				);
$arguments627['__thenClosure'] = function() use ($renderingContext, $self) {
$output629 = '';

$output629 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure631 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments630 = array();
$arguments630['key'] = NULL;
$arguments630['id'] = NULL;
$arguments630['default'] = NULL;
$arguments630['htmlEscape'] = NULL;
$arguments630['arguments'] = NULL;
$arguments630['extensionName'] = NULL;
$output632 = '';

$output632 .= 'type_';
$array633 = array (
);
$output632 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array633);
$arguments630['key'] = $output632;

$output629 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments630, $renderChildrenClosure631, $renderingContext)]);

$output629 .= '
												';
return $output629;
};
$arguments627['__elseClosures'][] = function() use ($renderingContext, $self) {
$output634 = '';

$output634 .= '
													[';
$array635 = array (
);
$output634 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.type', $array635)]);

$output634 .= ']
												';
return $output634;
};

$output626 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments627, $renderChildrenClosure628, $renderingContext);

$output626 .= '
										';
return $output626;
};
$arguments624 = array();
$arguments624['if'] = NULL;

$output619 .= '';

$output619 .= '
									';
return $output619;
};
$arguments584 = array();
$arguments584['then'] = NULL;
$arguments584['else'] = NULL;
$arguments584['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array616 = array();
$array617 = array (
);$array616['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.isInPageContext', $array617);

$expression618 = function($context) {return ($context["node0"]);};
$arguments584['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression618(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array616)
					),
					$renderingContext
				);
$arguments584['__thenClosure'] = function() use ($renderingContext, $self) {
$output586 = '';

$output586 .= '
											';
$array587 = array (
);
$output586 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.tableName', $array587)]);

$output586 .= '
										';
return $output586;
};
$arguments584['__elseClosures'][] = function() use ($renderingContext, $self) {
$output588 = '';

$output588 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure590 = function() use ($renderingContext, $self) {
$output604 = '';

$output604 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure606 = function() use ($renderingContext, $self) {
$output607 = '';

$output607 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure609 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments608 = array();
$arguments608['key'] = NULL;
$arguments608['id'] = NULL;
$arguments608['default'] = NULL;
$arguments608['htmlEscape'] = NULL;
$arguments608['arguments'] = NULL;
$arguments608['extensionName'] = NULL;
$output610 = '';

$output610 .= 'type_';
$array611 = array (
);
$output610 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array611);
$arguments608['key'] = $output610;

$output607 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments608, $renderChildrenClosure609, $renderingContext)]);

$output607 .= '
												';
return $output607;
};
$arguments605 = array();

$output604 .= '';

$output604 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure613 = function() use ($renderingContext, $self) {
$output614 = '';

$output614 .= '
													[';
$array615 = array (
);
$output614 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.type', $array615)]);

$output614 .= ']
												';
return $output614;
};
$arguments612 = array();
$arguments612['if'] = NULL;

$output604 .= '';

$output604 .= '
											';
return $output604;
};
$arguments589 = array();
$arguments589['then'] = NULL;
$arguments589['else'] = NULL;
$arguments589['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array598 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure600 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments599 = array();
$arguments599['key'] = NULL;
$arguments599['id'] = NULL;
$arguments599['default'] = NULL;
$arguments599['htmlEscape'] = NULL;
$arguments599['arguments'] = NULL;
$arguments599['extensionName'] = NULL;
$output601 = '';

$output601 .= 'type_';
$array602 = array (
);
$output601 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array602);
$arguments599['key'] = $output601;
$array598['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments599, $renderChildrenClosure600, $renderingContext);

$expression603 = function($context) {return ($context["node0"]);};
$arguments589['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression603(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array598)
					),
					$renderingContext
				);
$arguments589['__thenClosure'] = function() use ($renderingContext, $self) {
$output591 = '';

$output591 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure593 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments592 = array();
$arguments592['key'] = NULL;
$arguments592['id'] = NULL;
$arguments592['default'] = NULL;
$arguments592['htmlEscape'] = NULL;
$arguments592['arguments'] = NULL;
$arguments592['extensionName'] = NULL;
$output594 = '';

$output594 .= 'type_';
$array595 = array (
);
$output594 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array595);
$arguments592['key'] = $output594;

$output591 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext)]);

$output591 .= '
												';
return $output591;
};
$arguments589['__elseClosures'][] = function() use ($renderingContext, $self) {
$output596 = '';

$output596 .= '
													[';
$array597 = array (
);
$output596 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.type', $array597)]);

$output596 .= ']
												';
return $output596;
};

$output588 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments589, $renderChildrenClosure590, $renderingContext);

$output588 .= '
										';
return $output588;
};

$output485 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments584, $renderChildrenClosure585, $renderingContext);

$output485 .= '
								</td>
								<td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure655 = function() use ($renderingContext, $self) {
$output671 = '';

$output671 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure673 = function() use ($renderingContext, $self) {
$output674 = '';

$output674 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure676 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments675 = array();
$arguments675['key'] = NULL;
$arguments675['id'] = NULL;
$arguments675['default'] = NULL;
$arguments675['htmlEscape'] = NULL;
$arguments675['arguments'] = NULL;
$arguments675['extensionName'] = NULL;
$output677 = '';

$output677 .= 'action_';
$array678 = array (
);
$output677 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array678);

$output677 .= '_';
$array679 = array (
);
$output677 .= $renderingContext->getVariableProvider()->getByPath('logItem.action', $array679);
$arguments675['key'] = $output677;

$output674 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments675, $renderChildrenClosure676, $renderingContext)]);

$output674 .= '
										';
return $output674;
};
$arguments672 = array();

$output671 .= '';

$output671 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure681 = function() use ($renderingContext, $self) {
$output682 = '';

$output682 .= '
											[';
$array683 = array (
);
$output682 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.action', $array683)]);

$output682 .= ']
										';
return $output682;
};
$arguments680 = array();
$arguments680['if'] = NULL;

$output671 .= '';

$output671 .= '
									';
return $output671;
};
$arguments654 = array();
$arguments654['then'] = NULL;
$arguments654['else'] = NULL;
$arguments654['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array664 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure666 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments665 = array();
$arguments665['key'] = NULL;
$arguments665['id'] = NULL;
$arguments665['default'] = NULL;
$arguments665['htmlEscape'] = NULL;
$arguments665['arguments'] = NULL;
$arguments665['extensionName'] = NULL;
$output667 = '';

$output667 .= 'action_';
$array668 = array (
);
$output667 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array668);

$output667 .= '_';
$array669 = array (
);
$output667 .= $renderingContext->getVariableProvider()->getByPath('logItem.action', $array669);
$arguments665['key'] = $output667;
$array664['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments665, $renderChildrenClosure666, $renderingContext);

$expression670 = function($context) {return ($context["node0"]);};
$arguments654['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression670(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array664)
					),
					$renderingContext
				);
$arguments654['__thenClosure'] = function() use ($renderingContext, $self) {
$output656 = '';

$output656 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure658 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments657 = array();
$arguments657['key'] = NULL;
$arguments657['id'] = NULL;
$arguments657['default'] = NULL;
$arguments657['htmlEscape'] = NULL;
$arguments657['arguments'] = NULL;
$arguments657['extensionName'] = NULL;
$output659 = '';

$output659 .= 'action_';
$array660 = array (
);
$output659 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array660);

$output659 .= '_';
$array661 = array (
);
$output659 .= $renderingContext->getVariableProvider()->getByPath('logItem.action', $array661);
$arguments657['key'] = $output659;

$output656 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments657, $renderChildrenClosure658, $renderingContext)]);

$output656 .= '
										';
return $output656;
};
$arguments654['__elseClosures'][] = function() use ($renderingContext, $self) {
$output662 = '';

$output662 .= '
											[';
$array663 = array (
);
$output662 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.action', $array663)]);

$output662 .= ']
										';
return $output662;
};

$output485 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments654, $renderChildrenClosure655, $renderingContext);

$output485 .= '
								</td>
								<td class="col-word-break">
									';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\FormatDetailsViewHelper
$renderChildrenClosure685 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments684 = array();
$arguments684['logEntry'] = NULL;
$array686 = array (
);$arguments684['logEntry'] = $renderingContext->getVariableProvider()->getByPath('logItem', $array686);

$output485 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\FormatDetailsViewHelper::renderStatic($arguments684, $renderChildrenClosure685, $renderingContext)]);

$output485 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\HistoryEntryViewHelper
$renderChildrenClosure688 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments687 = array();
$arguments687['uid'] = NULL;
$array689 = array (
);$arguments687['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.uid', $array689);

$output485 .= TYPO3\CMS\Belog\ViewHelpers\HistoryEntryViewHelper::renderStatic($arguments687, $renderChildrenClosure688, $renderingContext);

$output485 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure691 = function() use ($renderingContext, $self) {
$output695 = '';

$output695 .= '
										(msg#';
$array696 = array (
);
$output695 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.type', $array696)]);

$output695 .= '.';
$array697 = array (
);
$output695 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.action', $array697)]);

$output695 .= '.';
$array698 = array (
);
$output695 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.detailsNumber', $array698)]);

$output695 .= ')
									';
return $output695;
};
$arguments690 = array();
$arguments690['then'] = NULL;
$arguments690['else'] = NULL;
$arguments690['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array692 = array();
$array693 = array (
);$array692['0'] = $renderingContext->getVariableProvider()->getByPath('logItem.detailsNumber', $array693);
$array692['1'] = ' > 0';

$expression694 = function($context) {return (($context["node0"]) > 0);};
$arguments690['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression694(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array692)
					),
					$renderingContext
				);
$arguments690['__thenClosure'] = $renderChildrenClosure691;

$output485 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments690, $renderChildrenClosure691, $renderingContext);

$output485 .= '
								</td>
								<td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure700 = function() use ($renderingContext, $self) {
$output704 = '';

$output704 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure706 = function() use ($renderingContext, $self) {
$output709 = '';

$output709 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure711 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments710 = array();
$arguments710['key'] = NULL;
$arguments710['id'] = NULL;
$arguments710['default'] = NULL;
$arguments710['htmlEscape'] = NULL;
$arguments710['arguments'] = NULL;
$arguments710['extensionName'] = NULL;
$arguments710['key'] = 'actions.deleteWarnings';

$output709 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments710, $renderChildrenClosure711, $renderingContext)]);

$output709 .= '
										';
return $output709;
};
$arguments705 = array();
$arguments705['action'] = NULL;
$arguments705['arguments'] = array (
);
$arguments705['controller'] = NULL;
$arguments705['extensionName'] = NULL;
$arguments705['pluginName'] = NULL;
$arguments705['pageUid'] = NULL;
$arguments705['pageType'] = 0;
$arguments705['noCache'] = false;
$arguments705['noCacheHash'] = false;
$arguments705['section'] = '';
$arguments705['format'] = '';
$arguments705['linkAccessRestrictedPages'] = false;
$arguments705['additionalParams'] = array (
);
$arguments705['absolute'] = false;
$arguments705['addQueryString'] = false;
$arguments705['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments705['addQueryStringMethod'] = NULL;
$arguments705['additionalAttributes'] = NULL;
$arguments705['data'] = NULL;
$arguments705['class'] = NULL;
$arguments705['dir'] = NULL;
$arguments705['id'] = NULL;
$arguments705['lang'] = NULL;
$arguments705['style'] = NULL;
$arguments705['title'] = NULL;
$arguments705['accesskey'] = NULL;
$arguments705['tabindex'] = NULL;
$arguments705['onclick'] = NULL;
$arguments705['name'] = NULL;
$arguments705['rel'] = NULL;
$arguments705['rev'] = NULL;
$arguments705['target'] = NULL;
$arguments705['action'] = 'deleteMessage';
// Rendering Array
$array707 = array();
$array708 = array (
);$array707['errorUid'] = $renderingContext->getVariableProvider()->getByPath('logItem.uid', $array708);
$arguments705['arguments'] = $array707;
$arguments705['class'] = 'btn btn-warning';

$output704 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments705, $renderChildrenClosure706, $renderingContext);

$output704 .= '
									';
return $output704;
};
$arguments699 = array();
$arguments699['then'] = NULL;
$arguments699['else'] = NULL;
$arguments699['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array701 = array();
$array702 = array (
);$array701['0'] = $renderingContext->getVariableProvider()->getByPath('logItem.error', $array702);
$array701['1'] = ' == 1';

$expression703 = function($context) {return (($context["node0"]) == 1);};
$arguments699['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression703(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array701)
					),
					$renderingContext
				);
$arguments699['__thenClosure'] = $renderChildrenClosure700;

$output485 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments699, $renderChildrenClosure700, $renderingContext);

$output485 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure713 = function() use ($renderingContext, $self) {
$output717 = '';

$output717 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure719 = function() use ($renderingContext, $self) {
$output722 = '';

$output722 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure724 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments723 = array();
$arguments723['key'] = NULL;
$arguments723['id'] = NULL;
$arguments723['default'] = NULL;
$arguments723['htmlEscape'] = NULL;
$arguments723['arguments'] = NULL;
$arguments723['extensionName'] = NULL;
$arguments723['key'] = 'actions.delete';

$output722 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments723, $renderChildrenClosure724, $renderingContext)]);

$output722 .= '
										';
return $output722;
};
$arguments718 = array();
$arguments718['action'] = NULL;
$arguments718['arguments'] = array (
);
$arguments718['controller'] = NULL;
$arguments718['extensionName'] = NULL;
$arguments718['pluginName'] = NULL;
$arguments718['pageUid'] = NULL;
$arguments718['pageType'] = 0;
$arguments718['noCache'] = false;
$arguments718['noCacheHash'] = false;
$arguments718['section'] = '';
$arguments718['format'] = '';
$arguments718['linkAccessRestrictedPages'] = false;
$arguments718['additionalParams'] = array (
);
$arguments718['absolute'] = false;
$arguments718['addQueryString'] = false;
$arguments718['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments718['addQueryStringMethod'] = NULL;
$arguments718['additionalAttributes'] = NULL;
$arguments718['data'] = NULL;
$arguments718['class'] = NULL;
$arguments718['dir'] = NULL;
$arguments718['id'] = NULL;
$arguments718['lang'] = NULL;
$arguments718['style'] = NULL;
$arguments718['title'] = NULL;
$arguments718['accesskey'] = NULL;
$arguments718['tabindex'] = NULL;
$arguments718['onclick'] = NULL;
$arguments718['name'] = NULL;
$arguments718['rel'] = NULL;
$arguments718['rev'] = NULL;
$arguments718['target'] = NULL;
$arguments718['action'] = 'deleteMessage';
// Rendering Array
$array720 = array();
$array721 = array (
);$array720['errorUid'] = $renderingContext->getVariableProvider()->getByPath('logItem.uid', $array721);
$arguments718['arguments'] = $array720;
$arguments718['class'] = 'btn btn-danger';

$output717 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments718, $renderChildrenClosure719, $renderingContext);

$output717 .= '
									';
return $output717;
};
$arguments712 = array();
$arguments712['then'] = NULL;
$arguments712['else'] = NULL;
$arguments712['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array714 = array();
$array715 = array (
);$array714['0'] = $renderingContext->getVariableProvider()->getByPath('logItem.error', $array715);
$array714['1'] = ' == 2';

$expression716 = function($context) {return (($context["node0"]) == 2);};
$arguments712['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression716(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array714)
					),
					$renderingContext
				);
$arguments712['__thenClosure'] = $renderChildrenClosure713;

$output485 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments712, $renderChildrenClosure713, $renderingContext);

$output485 .= '
								</td>
							</tr>
						';
return $output485;
};
$arguments482 = array();
$arguments482['each'] = NULL;
$arguments482['as'] = NULL;
$arguments482['key'] = NULL;
$arguments482['reverse'] = false;
$arguments482['iteration'] = NULL;
$array484 = array (
);$arguments482['each'] = $renderingContext->getVariableProvider()->getByPath('day', $array484);
$arguments482['as'] = 'logItem';

$output442 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments482, $renderChildrenClosure483, $renderingContext);

$output442 .= '
					</tbody>
				</table>
			</div>
		';
return $output442;
};
$arguments439 = array();
$arguments439['each'] = NULL;
$arguments439['as'] = NULL;
$arguments439['key'] = NULL;
$arguments439['reverse'] = false;
$arguments439['iteration'] = NULL;
$array441 = array (
);$arguments439['each'] = $renderingContext->getVariableProvider()->getByPath('pidEntry', $array441);
$arguments439['as'] = 'day';
$arguments439['key'] = 'dayTimestamp';

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);

$output46 .= '
	</div>
';
return $output46;
};
$arguments43 = array();
$arguments43['each'] = NULL;
$arguments43['as'] = NULL;
$arguments43['key'] = NULL;
$arguments43['reverse'] = false;
$arguments43['iteration'] = NULL;
$array45 = array (
);$arguments43['each'] = $renderingContext->getVariableProvider()->getByPath('groupedLogEntries', $array45);
$arguments43['as'] = 'pidEntry';
$arguments43['key'] = 'pid';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#
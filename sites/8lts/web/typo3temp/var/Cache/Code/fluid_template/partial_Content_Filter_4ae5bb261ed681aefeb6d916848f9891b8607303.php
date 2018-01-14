<?php

class partial_Content_Filter_4ae5bb261ed681aefeb6d916848f9891b8607303 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return '
	This is an ugly workaround.
	The function module in Web->Info already renders a form tag, and there is
	no easy way to circumvent this. The page id is needed for the info module
	that is not extbase based to figure the permissions. Thus, we have to add
	the page Id manually to hint the info module about that.
';
};
$arguments1 = array();

$output0 .= NULL;

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
	<input type="hidden" name="id" value="';
$array9 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constraint.pageId', $array9)]);

$output8 .= '" />
';
return $output8;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array5 = array();
$array6 = array (
);$array5['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.isInPageContext', $array6);

$expression7 = function($context) {return ($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression7(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = $renderChildrenClosure4;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
	<div class="form-group">
		<label for="belog-users">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['key'] = NULL;
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['htmlEscape'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['key'] = 'users';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output13 .= '</label>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['name'] = NULL;
$arguments16['value'] = NULL;
$arguments16['property'] = NULL;
$arguments16['class'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$arguments16['size'] = NULL;
$arguments16['disabled'] = NULL;
$arguments16['options'] = NULL;
$arguments16['optionsAfterContent'] = false;
$arguments16['optionValueField'] = NULL;
$arguments16['optionLabelField'] = NULL;
$arguments16['sortByOptionLabel'] = false;
$arguments16['selectAllByDefault'] = false;
$arguments16['errorClass'] = 'f3-form-error';
$arguments16['prependOptionLabel'] = NULL;
$arguments16['prependOptionValue'] = NULL;
$arguments16['multiple'] = false;
$arguments16['property'] = 'userOrGroup';
$array18 = array (
);$arguments16['options'] = $renderingContext->getVariableProvider()->getByPath('userGroups', $array18);
// Rendering Array
$array19 = array();
$array19['onchange'] = 'submit()';
$arguments16['additionalAttributes'] = $array19;
$arguments16['class'] = 'form-control input-sm';
$arguments16['id'] = 'belog-users';

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output13 .= '
	</div>

	<div class="form-group">
		<label for="belog-max">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['key'] = NULL;
$arguments20['id'] = NULL;
$arguments20['default'] = NULL;
$arguments20['htmlEscape'] = NULL;
$arguments20['arguments'] = NULL;
$arguments20['extensionName'] = NULL;
$arguments20['key'] = 'max';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output13 .= '</label>
		';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['name'] = NULL;
$arguments22['value'] = NULL;
$arguments22['property'] = NULL;
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['size'] = NULL;
$arguments22['disabled'] = NULL;
$arguments22['options'] = NULL;
$arguments22['optionsAfterContent'] = false;
$arguments22['optionValueField'] = NULL;
$arguments22['optionLabelField'] = NULL;
$arguments22['sortByOptionLabel'] = false;
$arguments22['selectAllByDefault'] = false;
$arguments22['errorClass'] = 'f3-form-error';
$arguments22['prependOptionLabel'] = NULL;
$arguments22['prependOptionValue'] = NULL;
$arguments22['multiple'] = false;
$arguments22['optionLabelPrefix'] = NULL;
$arguments22['property'] = 'number';
$array24 = array (
);$arguments22['options'] = $renderingContext->getVariableProvider()->getByPath('settings.selectableNumberOfLogEntries', $array24);
$arguments22['optionLabelPrefix'] = 'LLL:EXT:belog/Resources/Private/Language/locallang.xlf:';
// Rendering Array
$array25 = array();
$array25['onchange'] = 'submit()';
$arguments22['additionalAttributes'] = $array25;
$arguments22['class'] = 'form-control input-sm';
$arguments22['id'] = 'belog-max';

$output13 .= TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output13 .= '
	</div>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
				<div class="form-group">
					<label for="belog-workspaces">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['key'] = NULL;
$arguments39['id'] = NULL;
$arguments39['default'] = NULL;
$arguments39['htmlEscape'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['extensionName'] = NULL;
$arguments39['key'] = 'workspace';

$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output38 .= '</label>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['additionalAttributes'] = NULL;
$arguments41['data'] = NULL;
$arguments41['name'] = NULL;
$arguments41['value'] = NULL;
$arguments41['property'] = NULL;
$arguments41['class'] = NULL;
$arguments41['dir'] = NULL;
$arguments41['id'] = NULL;
$arguments41['lang'] = NULL;
$arguments41['style'] = NULL;
$arguments41['title'] = NULL;
$arguments41['accesskey'] = NULL;
$arguments41['tabindex'] = NULL;
$arguments41['onclick'] = NULL;
$arguments41['size'] = NULL;
$arguments41['disabled'] = NULL;
$arguments41['options'] = NULL;
$arguments41['optionsAfterContent'] = false;
$arguments41['optionValueField'] = NULL;
$arguments41['optionLabelField'] = NULL;
$arguments41['sortByOptionLabel'] = false;
$arguments41['selectAllByDefault'] = false;
$arguments41['errorClass'] = 'f3-form-error';
$arguments41['prependOptionLabel'] = NULL;
$arguments41['prependOptionValue'] = NULL;
$arguments41['multiple'] = false;
$arguments41['property'] = 'workspaceUid';
$array43 = array (
);$arguments41['options'] = $renderingContext->getVariableProvider()->getByPath('workspaces', $array43);
// Rendering Array
$array44 = array();
$array44['onchange'] = 'submit()';
$arguments41['additionalAttributes'] = $array44;
$arguments41['class'] = 'form-control input-sm';
$arguments41['id'] = 'belog-workspaces';

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output38 .= '
				</div>
		';
return $output38;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('showWorkspaceSelector', $array36);

$expression37 = function($context) {return ($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = $renderChildrenClosure34;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
	';
return $output32;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\IsExtensionLoadedViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['extensionKey'] = NULL;
$arguments29['extensionKey'] = 'workspaces';
$array28['0'] = TYPO3\CMS\Belog\ViewHelpers\IsExtensionLoadedViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$expression31 = function($context) {return ($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['__thenClosure'] = $renderChildrenClosure27;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output13 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
		<div class="form-group">
			<label for="belog-depth">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['key'] = NULL;
$arguments51['id'] = NULL;
$arguments51['default'] = NULL;
$arguments51['htmlEscape'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['key'] = 'chLog_menuDepth';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output50 .= '</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['name'] = NULL;
$arguments53['value'] = NULL;
$arguments53['property'] = NULL;
$arguments53['class'] = NULL;
$arguments53['dir'] = NULL;
$arguments53['id'] = NULL;
$arguments53['lang'] = NULL;
$arguments53['style'] = NULL;
$arguments53['title'] = NULL;
$arguments53['accesskey'] = NULL;
$arguments53['tabindex'] = NULL;
$arguments53['onclick'] = NULL;
$arguments53['size'] = NULL;
$arguments53['disabled'] = NULL;
$arguments53['options'] = NULL;
$arguments53['optionsAfterContent'] = false;
$arguments53['optionValueField'] = NULL;
$arguments53['optionLabelField'] = NULL;
$arguments53['sortByOptionLabel'] = false;
$arguments53['selectAllByDefault'] = false;
$arguments53['errorClass'] = 'f3-form-error';
$arguments53['prependOptionLabel'] = NULL;
$arguments53['prependOptionValue'] = NULL;
$arguments53['multiple'] = false;
$arguments53['property'] = 'depth';
$array55 = array (
);$arguments53['options'] = $renderingContext->getVariableProvider()->getByPath('pageDepths', $array55);
// Rendering Array
$array56 = array();
$array56['onchange'] = 'submit()';
$arguments53['additionalAttributes'] = $array56;
$arguments53['class'] = 'form-control input-sm';
$arguments53['id'] = 'belog-depth';

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output50 .= '
		</div>
	';
return $output50;
};
$arguments45 = array();
$arguments45['then'] = NULL;
$arguments45['else'] = NULL;
$arguments45['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array47 = array();
$array48 = array (
);$array47['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.isInPageContext', $array48);

$expression49 = function($context) {return ($context["node0"]);};
$arguments45['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression49(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)
					),
					$renderingContext
				);
$arguments45['__thenClosure'] = $renderChildrenClosure46;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output13 .= '

	<div class="form-group">
		<label for="belog-time">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['key'] = NULL;
$arguments57['id'] = NULL;
$arguments57['default'] = NULL;
$arguments57['htmlEscape'] = NULL;
$arguments57['arguments'] = NULL;
$arguments57['extensionName'] = NULL;
$arguments57['key'] = 'time';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output13 .= '</label>
		';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['additionalAttributes'] = NULL;
$arguments59['data'] = NULL;
$arguments59['name'] = NULL;
$arguments59['value'] = NULL;
$arguments59['property'] = NULL;
$arguments59['class'] = NULL;
$arguments59['dir'] = NULL;
$arguments59['id'] = NULL;
$arguments59['lang'] = NULL;
$arguments59['style'] = NULL;
$arguments59['title'] = NULL;
$arguments59['accesskey'] = NULL;
$arguments59['tabindex'] = NULL;
$arguments59['onclick'] = NULL;
$arguments59['size'] = NULL;
$arguments59['disabled'] = NULL;
$arguments59['options'] = NULL;
$arguments59['optionsAfterContent'] = false;
$arguments59['optionValueField'] = NULL;
$arguments59['optionLabelField'] = NULL;
$arguments59['sortByOptionLabel'] = false;
$arguments59['selectAllByDefault'] = false;
$arguments59['errorClass'] = 'f3-form-error';
$arguments59['prependOptionLabel'] = NULL;
$arguments59['prependOptionValue'] = NULL;
$arguments59['multiple'] = false;
$arguments59['optionLabelPrefix'] = NULL;
$arguments59['property'] = 'timeFrame';
$array61 = array (
);$arguments59['options'] = $renderingContext->getVariableProvider()->getByPath('settings.selectableTimeFrames', $array61);
$arguments59['optionLabelPrefix'] = 'LLL:EXT:belog/Resources/Private/Language/locallang.xlf:';
// Rendering Array
$array62 = array();
$array62['onchange'] = 'submit()';
$arguments59['additionalAttributes'] = $array62;
$arguments59['class'] = 'form-control input-sm';
$arguments59['id'] = 'belog-time';

$output13 .= TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output13 .= '
	</div>

	<div class="form-group">
		<label for="belog-action">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['key'] = NULL;
$arguments63['id'] = NULL;
$arguments63['default'] = NULL;
$arguments63['htmlEscape'] = NULL;
$arguments63['arguments'] = NULL;
$arguments63['extensionName'] = NULL;
$arguments63['key'] = 'action';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output13 .= '</label>
		';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['additionalAttributes'] = NULL;
$arguments65['data'] = NULL;
$arguments65['name'] = NULL;
$arguments65['value'] = NULL;
$arguments65['property'] = NULL;
$arguments65['class'] = NULL;
$arguments65['dir'] = NULL;
$arguments65['id'] = NULL;
$arguments65['lang'] = NULL;
$arguments65['style'] = NULL;
$arguments65['title'] = NULL;
$arguments65['accesskey'] = NULL;
$arguments65['tabindex'] = NULL;
$arguments65['onclick'] = NULL;
$arguments65['size'] = NULL;
$arguments65['disabled'] = NULL;
$arguments65['options'] = NULL;
$arguments65['optionsAfterContent'] = false;
$arguments65['optionValueField'] = NULL;
$arguments65['optionLabelField'] = NULL;
$arguments65['sortByOptionLabel'] = false;
$arguments65['selectAllByDefault'] = false;
$arguments65['errorClass'] = 'f3-form-error';
$arguments65['prependOptionLabel'] = NULL;
$arguments65['prependOptionValue'] = NULL;
$arguments65['multiple'] = false;
$arguments65['optionLabelPrefix'] = NULL;
$arguments65['property'] = 'action';
$array67 = array (
);$arguments65['options'] = $renderingContext->getVariableProvider()->getByPath('settings.selectableActions', $array67);
$arguments65['optionLabelPrefix'] = 'LLL:EXT:belog/Resources/Private/Language/locallang.xlf:';
// Rendering Array
$array68 = array();
$array68['onchange'] = 'submit()';
$arguments65['additionalAttributes'] = $array68;
$arguments65['class'] = 'form-control input-sm';
$arguments65['id'] = 'belog-action';

$output13 .= TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output13 .= '
	</div>

	<div class="form-group">
		<label for="belog-group">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['key'] = NULL;
$arguments69['id'] = NULL;
$arguments69['default'] = NULL;
$arguments69['htmlEscape'] = NULL;
$arguments69['arguments'] = NULL;
$arguments69['extensionName'] = NULL;
$arguments69['key'] = 'groupByPage';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output13 .= '</label>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['additionalAttributes'] = NULL;
$arguments71['data'] = NULL;
$arguments71['name'] = NULL;
$arguments71['value'] = NULL;
$arguments71['property'] = NULL;
$arguments71['disabled'] = NULL;
$arguments71['errorClass'] = 'f3-form-error';
$arguments71['class'] = NULL;
$arguments71['dir'] = NULL;
$arguments71['id'] = NULL;
$arguments71['lang'] = NULL;
$arguments71['style'] = NULL;
$arguments71['title'] = NULL;
$arguments71['accesskey'] = NULL;
$arguments71['tabindex'] = NULL;
$arguments71['onclick'] = NULL;
$arguments71['checked'] = NULL;
$arguments71['multiple'] = false;
$arguments71['property'] = 'groupByPage';
$arguments71['value'] = 1;
// Rendering Array
$array73 = array();
$array73['onchange'] = 'submit()';
$arguments71['additionalAttributes'] = $array73;
$arguments71['id'] = 'belog-group';

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output13 .= '
	</div>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return '
		Date time fields for manual date selection
	';
};
$arguments74 = array();

$output13 .= NULL;

$output13 .= '


	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
		<div class="form-group">
			<label for="manualDateStart">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['key'] = NULL;
$arguments82['id'] = NULL;
$arguments82['default'] = NULL;
$arguments82['htmlEscape'] = NULL;
$arguments82['arguments'] = NULL;
$arguments82['extensionName'] = NULL;
$arguments82['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_common.xlf:from';

$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext)]);

$output81 .= '</label>
			<div class="input-group input-group-sm">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['additionalAttributes'] = NULL;
$arguments84['data'] = NULL;
$arguments84['name'] = NULL;
$arguments84['value'] = NULL;
$arguments84['property'] = NULL;
$arguments84['autofocus'] = NULL;
$arguments84['disabled'] = NULL;
$arguments84['maxlength'] = NULL;
$arguments84['readonly'] = NULL;
$arguments84['size'] = NULL;
$arguments84['placeholder'] = NULL;
$arguments84['pattern'] = NULL;
$arguments84['errorClass'] = 'f3-form-error';
$arguments84['class'] = NULL;
$arguments84['dir'] = NULL;
$arguments84['id'] = NULL;
$arguments84['lang'] = NULL;
$arguments84['style'] = NULL;
$arguments84['title'] = NULL;
$arguments84['accesskey'] = NULL;
$arguments84['tabindex'] = NULL;
$arguments84['onclick'] = NULL;
$arguments84['required'] = false;
$arguments84['type'] = 'text';
$arguments84['name'] = 'manualDateStart';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['then'] = NULL;
$arguments86['else'] = NULL;
$arguments86['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array88 = array();
$array89 = array (
);$array88['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array89);

$expression90 = function($context) {return ($context["node0"]);};
$arguments86['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression90(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array88)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['date'] = NULL;
$arguments91['format'] = '';
$arguments91['base'] = NULL;
$output93 = '';
$array94 = array (
);
$output93 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array94);

$output93 .= ' ';
$array95 = array (
);
$output93 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array95);
$arguments91['format'] = $output93;
$output96 = '';

$output96 .= '@';
$array97 = array (
);
$output96 .= $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array97);
$arguments91['date'] = $output96;
$renderChildrenClosure92 = $arguments91['date'] ? function() use ($arguments91) { return $arguments91['date']; } : $renderChildrenClosure92;$arguments86['then'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);
$arguments84['value'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);
$arguments84['id'] = 'manualDateStart';
$arguments84['class'] = 'form-control input-sm t3js-datetimepicker t3js-clearable';
// Rendering Array
$array98 = array();
$array98['date-type'] = 'datetime';
$arguments84['data'] = $array98;

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output81 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['additionalAttributes'] = NULL;
$arguments99['data'] = NULL;
$arguments99['name'] = NULL;
$arguments99['value'] = NULL;
$arguments99['property'] = NULL;
$arguments99['class'] = NULL;
$arguments99['dir'] = NULL;
$arguments99['id'] = NULL;
$arguments99['lang'] = NULL;
$arguments99['style'] = NULL;
$arguments99['title'] = NULL;
$arguments99['accesskey'] = NULL;
$arguments99['tabindex'] = NULL;
$arguments99['onclick'] = NULL;
$arguments99['property'] = 'startTimestamp';
$array101 = array (
);$arguments99['value'] = $renderingContext->getVariableProvider()->getByPath('constraint.startTimestamp', $array101);

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output81 .= '
				<span class="input-group-btn">
					<label class="btn btn-default" for="manualDateStart">
						<span class="fa fa-calendar"></span>
					</label>
				</span>
			</div>

		</div>

		<div class="form-group">
			<label for="manualDateStop">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['key'] = NULL;
$arguments102['id'] = NULL;
$arguments102['default'] = NULL;
$arguments102['htmlEscape'] = NULL;
$arguments102['arguments'] = NULL;
$arguments102['extensionName'] = NULL;
$arguments102['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_common.xlf:to';

$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext)]);

$output81 .= '</label>
			<div class="input-group input-group-sm">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['additionalAttributes'] = NULL;
$arguments104['data'] = NULL;
$arguments104['name'] = NULL;
$arguments104['value'] = NULL;
$arguments104['property'] = NULL;
$arguments104['autofocus'] = NULL;
$arguments104['disabled'] = NULL;
$arguments104['maxlength'] = NULL;
$arguments104['readonly'] = NULL;
$arguments104['size'] = NULL;
$arguments104['placeholder'] = NULL;
$arguments104['pattern'] = NULL;
$arguments104['errorClass'] = 'f3-form-error';
$arguments104['class'] = NULL;
$arguments104['dir'] = NULL;
$arguments104['id'] = NULL;
$arguments104['lang'] = NULL;
$arguments104['style'] = NULL;
$arguments104['title'] = NULL;
$arguments104['accesskey'] = NULL;
$arguments104['tabindex'] = NULL;
$arguments104['onclick'] = NULL;
$arguments104['required'] = false;
$arguments104['type'] = 'text';
$arguments104['name'] = 'manualDateStop';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['date'] = NULL;
$arguments106['format'] = '';
$arguments106['base'] = NULL;
$output108 = '';
$array109 = array (
);
$output108 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array109);

$output108 .= ' ';
$array110 = array (
);
$output108 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array110);
$arguments106['format'] = $output108;
$output111 = '';

$output111 .= '@';
$array112 = array (
);
$output111 .= $renderingContext->getVariableProvider()->getByPath('constraint.endTimestamp', $array112);
$arguments106['date'] = $output111;
$renderChildrenClosure107 = $arguments106['date'] ? function() use ($arguments106) { return $arguments106['date']; } : $renderChildrenClosure107;$arguments104['value'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);
$arguments104['id'] = 'manualDateStop';
$arguments104['class'] = 'form-control input-sm t3js-datetimepicker t3js-clearable';
// Rendering Array
$array113 = array();
$array113['date-type'] = 'datetime';
$arguments104['data'] = $array113;

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output81 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['additionalAttributes'] = NULL;
$arguments114['data'] = NULL;
$arguments114['name'] = NULL;
$arguments114['value'] = NULL;
$arguments114['property'] = NULL;
$arguments114['class'] = NULL;
$arguments114['dir'] = NULL;
$arguments114['id'] = NULL;
$arguments114['lang'] = NULL;
$arguments114['style'] = NULL;
$arguments114['title'] = NULL;
$arguments114['accesskey'] = NULL;
$arguments114['tabindex'] = NULL;
$arguments114['onclick'] = NULL;
$arguments114['property'] = 'endTimestamp';

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output81 .= '
				<span class="input-group-btn">
					<label class="btn btn-default" for="manualDateStop">
						<span class="fa fa-calendar"></span>
					</label>
				</span>
			</div>
		</div>
	';
return $output81;
};
$arguments76 = array();
$arguments76['then'] = NULL;
$arguments76['else'] = NULL;
$arguments76['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.timeFrame', $array79);
$array78['1'] = ' == 30';

$expression80 = function($context) {return (($context["node0"]) == 30);};
$arguments76['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression80(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)
					),
					$renderingContext
				);
$arguments76['__thenClosure'] = $renderChildrenClosure77;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output13 .= '

	<div class="form-group">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['additionalAttributes'] = NULL;
$arguments116['data'] = NULL;
$arguments116['name'] = NULL;
$arguments116['value'] = NULL;
$arguments116['property'] = NULL;
$arguments116['disabled'] = NULL;
$arguments116['class'] = NULL;
$arguments116['dir'] = NULL;
$arguments116['id'] = NULL;
$arguments116['lang'] = NULL;
$arguments116['style'] = NULL;
$arguments116['title'] = NULL;
$arguments116['accesskey'] = NULL;
$arguments116['tabindex'] = NULL;
$arguments116['onclick'] = NULL;
$arguments116['id'] = 'submit-constraint';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['key'] = NULL;
$arguments118['id'] = NULL;
$arguments118['default'] = NULL;
$arguments118['htmlEscape'] = NULL;
$arguments118['arguments'] = NULL;
$arguments118['extensionName'] = NULL;
$arguments118['key'] = 'set';
$arguments116['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);
$arguments116['class'] = 'btn btn-default btn-sm';

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output13 .= '
	</div>
';
return $output13;
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['action'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['controller'] = NULL;
$arguments10['extensionName'] = NULL;
$arguments10['pluginName'] = NULL;
$arguments10['pageUid'] = NULL;
$arguments10['object'] = NULL;
$arguments10['pageType'] = 0;
$arguments10['noCache'] = false;
$arguments10['noCacheHash'] = false;
$arguments10['section'] = '';
$arguments10['format'] = '';
$arguments10['additionalParams'] = array (
);
$arguments10['absolute'] = false;
$arguments10['addQueryString'] = false;
$arguments10['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments10['addQueryStringMethod'] = 'GET';
$arguments10['fieldNamePrefix'] = NULL;
$arguments10['actionUri'] = NULL;
$arguments10['objectName'] = NULL;
$arguments10['hiddenFieldClassName'] = NULL;
$arguments10['enctype'] = NULL;
$arguments10['method'] = NULL;
$arguments10['name'] = NULL;
$arguments10['onreset'] = NULL;
$arguments10['onsubmit'] = NULL;
$arguments10['target'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$array12 = array (
);$arguments10['object'] = $renderingContext->getVariableProvider()->getByPath('constraint', $array12);
$arguments10['action'] = 'index';
$arguments10['name'] = 'constraint';
$arguments10['class'] = 'form-inline form-inline-spaced';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#
<?php

class FormManager_action_index_7c66024c89390214020450e58cbebedce98bfb22 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'FormManager';
}
public function hasLayout() {
return TRUE;
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
));
}

/**
 * section MainContent
 */
public function section_186817d730a4234a5cb5db37d7099a3440fc5dea(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

	<script type="text/javascript">
		require([\'';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dynamicRequireJsModules.app', $array1)]);

$output0 .= '\', \'';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dynamicRequireJsModules.viewModel', $array2)]);

$output0 .= '\'], function (formManagerApp, viewModel) {
			var FORMMANAGER_APP = formManagerApp.getInstance(
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$array5 = array (
);return $renderingContext->getVariableProvider()->getByPath('formManagerAppInitialData', $array5);
};
$arguments3 = array();
$arguments3['value'] = NULL;
$arguments3['keepQuotes'] = false;
$arguments3['encoding'] = NULL;
$renderChildrenClosure4 = $arguments3['value'] ? function() use ($arguments3) { return $arguments3['value']; } : $renderChildrenClosure4;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= ',
				viewModel
			).run();
		});
	</script>
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['key'] = NULL;
$arguments6['id'] = NULL;
$arguments6['default'] = NULL;
$arguments6['htmlEscape'] = NULL;
$arguments6['arguments'] = NULL;
$arguments6['extensionName'] = NULL;
$arguments6['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.headline';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output0 .= '</h1>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output288 = '';

$output288 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
$output291 = '';

$output291 .= '
			<div class="panel panel-space panel-default recordlist">
				<div class="panel-heading">
					<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments292 = array();
$arguments292['key'] = NULL;
$arguments292['id'] = NULL;
$arguments292['default'] = NULL;
$arguments292['htmlEscape'] = NULL;
$arguments292['arguments'] = NULL;
$arguments292['extensionName'] = NULL;
$arguments292['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_existing_forms';

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext)]);

$output291 .= '</span>
				</div>
				<div class="collapse in">
					<div class="table-fit">
						<table id="forms" class="table table-striped table-hover">
							<thead>
								<tr>
									<th class="col-icon nowrap"><a class="btn btn-default" data-identifier="newForm" href="#">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments294 = array();
$arguments294['identifier'] = NULL;
$arguments294['size'] = 'small';
$arguments294['overlay'] = NULL;
$arguments294['state'] = 'default';
$arguments294['alternativeMarkupIdentifier'] = NULL;
$arguments294['identifier'] = 'actions-add';

$output291 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output291 .= '</a></th>
									<th class="col-title col-responsive nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments296 = array();
$arguments296['key'] = NULL;
$arguments296['id'] = NULL;
$arguments296['default'] = NULL;
$arguments296['htmlEscape'] = NULL;
$arguments296['arguments'] = NULL;
$arguments296['extensionName'] = NULL;
$arguments296['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.form_name';

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext)]);

$output291 .= '</th>
									<th class="col-control nowrap"></th>
									<th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments298 = array();
$arguments298['key'] = NULL;
$arguments298['id'] = NULL;
$arguments298['default'] = NULL;
$arguments298['htmlEscape'] = NULL;
$arguments298['arguments'] = NULL;
$arguments298['extensionName'] = NULL;
$arguments298['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.location';

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext)]);

$output291 .= '</th>
									<th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments300 = array();
$arguments300['key'] = NULL;
$arguments300['id'] = NULL;
$arguments300['default'] = NULL;
$arguments300['htmlEscape'] = NULL;
$arguments300['arguments'] = NULL;
$arguments300['extensionName'] = NULL;
$arguments300['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.references';

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext)]);

$output291 .= '</th>
								</tr>
							</thead>
							<tbody>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
$output305 = '';

$output305 .= '
								<tr>
									<td class="col-icon nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
$output328 = '';

$output328 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
$output331 = '';

$output331 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['key'] = NULL;
$arguments332['id'] = NULL;
$arguments332['default'] = NULL;
$arguments332['htmlEscape'] = NULL;
$arguments332['arguments'] = NULL;
$arguments332['extensionName'] = NULL;
$arguments332['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output331 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext)]);

$output331 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments334 = array();
$arguments334['identifier'] = NULL;
$arguments334['size'] = 'small';
$arguments334['overlay'] = NULL;
$arguments334['state'] = 'default';
$arguments334['alternativeMarkupIdentifier'] = NULL;
$arguments334['identifier'] = 'overlay-missing';

$output331 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext);

$output331 .= '
												</span>
											';
return $output331;
};
$arguments329 = array();

$output328 .= '';

$output328 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
$output341 = '';

$output341 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments342 = array();
$arguments342['key'] = NULL;
$arguments342['id'] = NULL;
$arguments342['default'] = NULL;
$arguments342['htmlEscape'] = NULL;
$arguments342['arguments'] = NULL;
$arguments342['extensionName'] = NULL;
$arguments342['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output341 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext)]);

$output341 .= ' ';
$array344 = array (
);
$output341 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array344)]);

$output341 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments345 = array();
$arguments345['identifier'] = NULL;
$arguments345['size'] = 'small';
$arguments345['overlay'] = NULL;
$arguments345['state'] = 'default';
$arguments345['alternativeMarkupIdentifier'] = NULL;
$arguments345['identifier'] = 'overlay-missing';

$output341 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$output341 .= '
												</span>
											';
return $output341;
};
$arguments336 = array();
$arguments336['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array338 = array();
$array339 = array (
);$array338['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array339);

$expression340 = function($context) {return ($context["node0"]);};
$arguments336['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression340(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array338)
					),
					$renderingContext
				);

$output328 .= '';

$output328 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
$output349 = '';

$output349 .= '
												<span title="id=';
$array350 = array (
);
$output349 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array350)]);

$output349 .= '" data-toggle="tooltip" data-placement="right">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments351 = array();
$arguments351['identifier'] = NULL;
$arguments351['size'] = 'small';
$arguments351['overlay'] = NULL;
$arguments351['state'] = 'default';
$arguments351['alternativeMarkupIdentifier'] = NULL;
$arguments351['identifier'] = 'content-elements-mailform';

$output349 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output349 .= '
												</span>
											';
return $output349;
};
$arguments347 = array();
$arguments347['if'] = NULL;

$output328 .= '';

$output328 .= '
										';
return $output328;
};
$arguments306 = array();
$arguments306['then'] = NULL;
$arguments306['else'] = NULL;
$arguments306['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array325 = array();
$array326 = array (
);$array325['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array326);

$expression327 = function($context) {return ($context["node0"]);};
$arguments306['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression327(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array325)
					),
					$renderingContext
				);
$arguments306['__thenClosure'] = function() use ($renderingContext, $self) {
$output308 = '';

$output308 .= '
												<span title="';
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
$arguments309['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output308 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext)]);

$output308 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments311 = array();
$arguments311['identifier'] = NULL;
$arguments311['size'] = 'small';
$arguments311['overlay'] = NULL;
$arguments311['state'] = 'default';
$arguments311['alternativeMarkupIdentifier'] = NULL;
$arguments311['identifier'] = 'overlay-missing';

$output308 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);

$output308 .= '
												</span>
											';
return $output308;
};
$arguments306['__elseClosures'][] = function() use ($renderingContext, $self) {
$output313 = '';

$output313 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments314 = array();
$arguments314['key'] = NULL;
$arguments314['id'] = NULL;
$arguments314['default'] = NULL;
$arguments314['htmlEscape'] = NULL;
$arguments314['arguments'] = NULL;
$arguments314['extensionName'] = NULL;
$arguments314['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output313 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext)]);

$output313 .= ' ';
$array316 = array (
);
$output313 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array316)]);

$output313 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments317 = array();
$arguments317['identifier'] = NULL;
$arguments317['size'] = 'small';
$arguments317['overlay'] = NULL;
$arguments317['state'] = 'default';
$arguments317['alternativeMarkupIdentifier'] = NULL;
$arguments317['identifier'] = 'overlay-missing';

$output313 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output313 .= '
												</span>
											';
return $output313;
};
$arguments306['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Array
$array319 = array();
$array320 = array (
);$array319['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array320);

return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateStack($renderingContext, $array319);
};
$arguments306['__elseClosures'][] = function() use ($renderingContext, $self) {
$output321 = '';

$output321 .= '
												<span title="id=';
$array322 = array (
);
$output321 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array322)]);

$output321 .= '" data-toggle="tooltip" data-placement="right">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments323 = array();
$arguments323['identifier'] = NULL;
$arguments323['size'] = 'small';
$arguments323['overlay'] = NULL;
$arguments323['state'] = 'default';
$arguments323['alternativeMarkupIdentifier'] = NULL;
$arguments323['identifier'] = 'content-elements-mailform';

$output321 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output321 .= '
												</span>
											';
return $output321;
};

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output305 .= '
									</td>
									<td class="col-title col-responsive nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
$output371 = '';

$output371 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
$output374 = '';

$output374 .= '
													<div title="';
$array375 = array (
);
$output374 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array375)]);

$output374 .= '">';
$array376 = array (
);
$output374 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array376)]);

$output374 .= '</div>
												';
return $output374;
};
$arguments372 = array();

$output371 .= '';

$output371 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
$output379 = '';

$output379 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
$array387 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array387)]);
};
$arguments380 = array();
$arguments380['action'] = NULL;
$arguments380['arguments'] = array (
);
$arguments380['controller'] = NULL;
$arguments380['extensionName'] = NULL;
$arguments380['pluginName'] = NULL;
$arguments380['pageUid'] = NULL;
$arguments380['pageType'] = 0;
$arguments380['noCache'] = false;
$arguments380['noCacheHash'] = false;
$arguments380['section'] = '';
$arguments380['format'] = '';
$arguments380['linkAccessRestrictedPages'] = false;
$arguments380['additionalParams'] = array (
);
$arguments380['absolute'] = false;
$arguments380['addQueryString'] = false;
$arguments380['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments380['addQueryStringMethod'] = NULL;
$arguments380['additionalAttributes'] = NULL;
$arguments380['data'] = NULL;
$arguments380['class'] = NULL;
$arguments380['dir'] = NULL;
$arguments380['id'] = NULL;
$arguments380['lang'] = NULL;
$arguments380['style'] = NULL;
$arguments380['title'] = NULL;
$arguments380['accesskey'] = NULL;
$arguments380['tabindex'] = NULL;
$arguments380['onclick'] = NULL;
$arguments380['name'] = NULL;
$arguments380['rel'] = NULL;
$arguments380['rev'] = NULL;
$arguments380['target'] = NULL;
$arguments380['controller'] = 'FormEditor';
$arguments380['action'] = 'index';
// Rendering Array
$array382 = array();
$array383 = array (
);$array382['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array383);
$arguments380['arguments'] = $array382;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure385 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments384 = array();
$arguments384['key'] = NULL;
$arguments384['id'] = NULL;
$arguments384['default'] = NULL;
$arguments384['htmlEscape'] = NULL;
$arguments384['arguments'] = NULL;
$arguments384['extensionName'] = NULL;
$arguments384['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments380['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments384, $renderChildrenClosure385, $renderingContext);
// Rendering Array
$array386 = array();
$array386['toggle'] = 'tooltip';
$array386['placement'] = 'right';
$arguments380['data'] = $array386;

$output379 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments380, $renderChildrenClosure381, $renderingContext);

$output379 .= '
												';
return $output379;
};
$arguments377 = array();
$arguments377['if'] = NULL;

$output371 .= '';

$output371 .= '
										';
return $output371;
};
$arguments353 = array();
$arguments353['then'] = NULL;
$arguments353['else'] = NULL;
$arguments353['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array367 = array();
$array368 = array (
);$array367['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array368);
$array367['1'] = ' || ';
$array369 = array (
);$array367['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array369);

$expression370 = function($context) {return (($context["node0"]) || ($context["node2"]));};
$arguments353['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression370(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array367)
					),
					$renderingContext
				);
$arguments353['__thenClosure'] = function() use ($renderingContext, $self) {
$output355 = '';

$output355 .= '
													<div title="';
$array356 = array (
);
$output355 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array356)]);

$output355 .= '">';
$array357 = array (
);
$output355 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array357)]);

$output355 .= '</div>
												';
return $output355;
};
$arguments353['__elseClosures'][] = function() use ($renderingContext, $self) {
$output358 = '';

$output358 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
$array366 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array366)]);
};
$arguments359 = array();
$arguments359['action'] = NULL;
$arguments359['arguments'] = array (
);
$arguments359['controller'] = NULL;
$arguments359['extensionName'] = NULL;
$arguments359['pluginName'] = NULL;
$arguments359['pageUid'] = NULL;
$arguments359['pageType'] = 0;
$arguments359['noCache'] = false;
$arguments359['noCacheHash'] = false;
$arguments359['section'] = '';
$arguments359['format'] = '';
$arguments359['linkAccessRestrictedPages'] = false;
$arguments359['additionalParams'] = array (
);
$arguments359['absolute'] = false;
$arguments359['addQueryString'] = false;
$arguments359['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments359['addQueryStringMethod'] = NULL;
$arguments359['additionalAttributes'] = NULL;
$arguments359['data'] = NULL;
$arguments359['class'] = NULL;
$arguments359['dir'] = NULL;
$arguments359['id'] = NULL;
$arguments359['lang'] = NULL;
$arguments359['style'] = NULL;
$arguments359['title'] = NULL;
$arguments359['accesskey'] = NULL;
$arguments359['tabindex'] = NULL;
$arguments359['onclick'] = NULL;
$arguments359['name'] = NULL;
$arguments359['rel'] = NULL;
$arguments359['rev'] = NULL;
$arguments359['target'] = NULL;
$arguments359['controller'] = 'FormEditor';
$arguments359['action'] = 'index';
// Rendering Array
$array361 = array();
$array362 = array (
);$array361['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array362);
$arguments359['arguments'] = $array361;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments363 = array();
$arguments363['key'] = NULL;
$arguments363['id'] = NULL;
$arguments363['default'] = NULL;
$arguments363['htmlEscape'] = NULL;
$arguments363['arguments'] = NULL;
$arguments363['extensionName'] = NULL;
$arguments363['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments359['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments363, $renderChildrenClosure364, $renderingContext);
// Rendering Array
$array365 = array();
$array365['toggle'] = 'tooltip';
$array365['placement'] = 'right';
$arguments359['data'] = $array365;

$output358 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext);

$output358 .= '
												';
return $output358;
};

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output305 .= '
									</td>
									<td class="col-control nowrap">
										<div class="btn-group" role="group">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
$output408 = '';

$output408 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
$output411 = '';

$output411 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments412 = array();
$arguments412['key'] = NULL;
$arguments412['id'] = NULL;
$arguments412['default'] = NULL;
$arguments412['htmlEscape'] = NULL;
$arguments412['arguments'] = NULL;
$arguments412['extensionName'] = NULL;
$arguments412['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output411 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext)]);

$output411 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments414 = array();
$arguments414['identifier'] = NULL;
$arguments414['size'] = 'small';
$arguments414['overlay'] = NULL;
$arguments414['state'] = 'default';
$arguments414['alternativeMarkupIdentifier'] = NULL;
$arguments414['identifier'] = 'actions-open';

$output411 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext);

$output411 .= '</button>
												';
return $output411;
};
$arguments409 = array();

$output408 .= '';

$output408 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure417 = function() use ($renderingContext, $self) {
$output418 = '';

$output418 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments425 = array();
$arguments425['identifier'] = NULL;
$arguments425['size'] = 'small';
$arguments425['overlay'] = NULL;
$arguments425['state'] = 'default';
$arguments425['alternativeMarkupIdentifier'] = NULL;
$arguments425['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext);
};
$arguments419 = array();
$arguments419['action'] = NULL;
$arguments419['arguments'] = array (
);
$arguments419['controller'] = NULL;
$arguments419['extensionName'] = NULL;
$arguments419['pluginName'] = NULL;
$arguments419['pageUid'] = NULL;
$arguments419['pageType'] = 0;
$arguments419['noCache'] = false;
$arguments419['noCacheHash'] = false;
$arguments419['section'] = '';
$arguments419['format'] = '';
$arguments419['linkAccessRestrictedPages'] = false;
$arguments419['additionalParams'] = array (
);
$arguments419['absolute'] = false;
$arguments419['addQueryString'] = false;
$arguments419['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments419['addQueryStringMethod'] = NULL;
$arguments419['additionalAttributes'] = NULL;
$arguments419['data'] = NULL;
$arguments419['class'] = NULL;
$arguments419['dir'] = NULL;
$arguments419['id'] = NULL;
$arguments419['lang'] = NULL;
$arguments419['style'] = NULL;
$arguments419['title'] = NULL;
$arguments419['accesskey'] = NULL;
$arguments419['tabindex'] = NULL;
$arguments419['onclick'] = NULL;
$arguments419['name'] = NULL;
$arguments419['rel'] = NULL;
$arguments419['rev'] = NULL;
$arguments419['target'] = NULL;
$arguments419['controller'] = 'FormEditor';
$arguments419['action'] = 'index';
// Rendering Array
$array421 = array();
$array422 = array (
);$array421['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array422);
$arguments419['arguments'] = $array421;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments423 = array();
$arguments423['key'] = NULL;
$arguments423['id'] = NULL;
$arguments423['default'] = NULL;
$arguments423['htmlEscape'] = NULL;
$arguments423['arguments'] = NULL;
$arguments423['extensionName'] = NULL;
$arguments423['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments419['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments423, $renderChildrenClosure424, $renderingContext);
$arguments419['class'] = 'btn btn-default form-record-open';

$output418 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments419, $renderChildrenClosure420, $renderingContext);

$output418 .= '
												';
return $output418;
};
$arguments416 = array();
$arguments416['if'] = NULL;

$output408 .= '';

$output408 .= '
											';
return $output408;
};
$arguments388 = array();
$arguments388['then'] = NULL;
$arguments388['else'] = NULL;
$arguments388['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array404 = array();
$array405 = array (
);$array404['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array405);
$array404['1'] = ' || ';
$array406 = array (
);$array404['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array406);

$expression407 = function($context) {return (($context["node0"]) || ($context["node2"]));};
$arguments388['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression407(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array404)
					),
					$renderingContext
				);
$arguments388['__thenClosure'] = function() use ($renderingContext, $self) {
$output390 = '';

$output390 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments391 = array();
$arguments391['key'] = NULL;
$arguments391['id'] = NULL;
$arguments391['default'] = NULL;
$arguments391['htmlEscape'] = NULL;
$arguments391['arguments'] = NULL;
$arguments391['extensionName'] = NULL;
$arguments391['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output390 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments391, $renderChildrenClosure392, $renderingContext)]);

$output390 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments393 = array();
$arguments393['identifier'] = NULL;
$arguments393['size'] = 'small';
$arguments393['overlay'] = NULL;
$arguments393['state'] = 'default';
$arguments393['alternativeMarkupIdentifier'] = NULL;
$arguments393['identifier'] = 'actions-open';

$output390 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments393, $renderChildrenClosure394, $renderingContext);

$output390 .= '</button>
												';
return $output390;
};
$arguments388['__elseClosures'][] = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments402 = array();
$arguments402['identifier'] = NULL;
$arguments402['size'] = 'small';
$arguments402['overlay'] = NULL;
$arguments402['state'] = 'default';
$arguments402['alternativeMarkupIdentifier'] = NULL;
$arguments402['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);
};
$arguments396 = array();
$arguments396['action'] = NULL;
$arguments396['arguments'] = array (
);
$arguments396['controller'] = NULL;
$arguments396['extensionName'] = NULL;
$arguments396['pluginName'] = NULL;
$arguments396['pageUid'] = NULL;
$arguments396['pageType'] = 0;
$arguments396['noCache'] = false;
$arguments396['noCacheHash'] = false;
$arguments396['section'] = '';
$arguments396['format'] = '';
$arguments396['linkAccessRestrictedPages'] = false;
$arguments396['additionalParams'] = array (
);
$arguments396['absolute'] = false;
$arguments396['addQueryString'] = false;
$arguments396['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments396['addQueryStringMethod'] = NULL;
$arguments396['additionalAttributes'] = NULL;
$arguments396['data'] = NULL;
$arguments396['class'] = NULL;
$arguments396['dir'] = NULL;
$arguments396['id'] = NULL;
$arguments396['lang'] = NULL;
$arguments396['style'] = NULL;
$arguments396['title'] = NULL;
$arguments396['accesskey'] = NULL;
$arguments396['tabindex'] = NULL;
$arguments396['onclick'] = NULL;
$arguments396['name'] = NULL;
$arguments396['rel'] = NULL;
$arguments396['rev'] = NULL;
$arguments396['target'] = NULL;
$arguments396['controller'] = 'FormEditor';
$arguments396['action'] = 'index';
// Rendering Array
$array398 = array();
$array399 = array (
);$array398['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array399);
$arguments396['arguments'] = $array398;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments400 = array();
$arguments400['key'] = NULL;
$arguments400['id'] = NULL;
$arguments400['default'] = NULL;
$arguments400['htmlEscape'] = NULL;
$arguments400['arguments'] = NULL;
$arguments400['extensionName'] = NULL;
$arguments400['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments396['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments400, $renderChildrenClosure401, $renderingContext);
$arguments396['class'] = 'btn btn-default form-record-open';

$output395 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output395 .= '
												';
return $output395;
};

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments388, $renderChildrenClosure389, $renderingContext);

$output305 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
$output480 = '';

$output480 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure482 = function() use ($renderingContext, $self) {
$output483 = '';

$output483 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments484 = array();
$arguments484['key'] = NULL;
$arguments484['id'] = NULL;
$arguments484['default'] = NULL;
$arguments484['htmlEscape'] = NULL;
$arguments484['arguments'] = NULL;
$arguments484['extensionName'] = NULL;
$arguments484['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output483 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments484, $renderChildrenClosure485, $renderingContext)]);

$output483 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments486 = array();
$arguments486['identifier'] = NULL;
$arguments486['size'] = 'small';
$arguments486['overlay'] = NULL;
$arguments486['state'] = 'default';
$arguments486['alternativeMarkupIdentifier'] = NULL;
$arguments486['identifier'] = 't3-form-icon-duplicate';

$output483 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);

$output483 .= '</button>
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure489 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments488 = array();
$arguments488['key'] = NULL;
$arguments488['id'] = NULL;
$arguments488['default'] = NULL;
$arguments488['htmlEscape'] = NULL;
$arguments488['arguments'] = NULL;
$arguments488['extensionName'] = NULL;
$arguments488['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output483 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments488, $renderChildrenClosure489, $renderingContext)]);

$output483 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments490 = array();
$arguments490['identifier'] = NULL;
$arguments490['size'] = 'small';
$arguments490['overlay'] = NULL;
$arguments490['state'] = 'default';
$arguments490['alternativeMarkupIdentifier'] = NULL;
$arguments490['identifier'] = 'actions-edit-delete';

$output483 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext);

$output483 .= '</button>
												';
return $output483;
};
$arguments481 = array();

$output480 .= '';

$output480 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure493 = function() use ($renderingContext, $self) {
$output494 = '';

$output494 .= '
													<a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array495 = array (
);
$output494 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array495)]);

$output494 .= '" data-form-name="';
$array496 = array (
);
$output494 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array496)]);

$output494 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure498 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments497 = array();
$arguments497['key'] = NULL;
$arguments497['id'] = NULL;
$arguments497['default'] = NULL;
$arguments497['htmlEscape'] = NULL;
$arguments497['arguments'] = NULL;
$arguments497['extensionName'] = NULL;
$arguments497['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output494 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments497, $renderChildrenClosure498, $renderingContext)]);

$output494 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure500 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments499 = array();
$arguments499['identifier'] = NULL;
$arguments499['size'] = 'small';
$arguments499['overlay'] = NULL;
$arguments499['state'] = 'default';
$arguments499['alternativeMarkupIdentifier'] = NULL;
$arguments499['identifier'] = 't3-form-icon-duplicate';

$output494 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments499, $renderChildrenClosure500, $renderingContext);

$output494 .= '</a>
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
$output517 = '';

$output517 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure519 = function() use ($renderingContext, $self) {
$output520 = '';

$output520 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array521 = array (
);
$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array521)]);

$output520 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure523 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments522 = array();
$arguments522['key'] = NULL;
$arguments522['id'] = NULL;
$arguments522['default'] = NULL;
$arguments522['htmlEscape'] = NULL;
$arguments522['arguments'] = NULL;
$arguments522['extensionName'] = NULL;
$arguments522['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments522, $renderChildrenClosure523, $renderingContext)]);

$output520 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments524 = array();
$arguments524['identifier'] = NULL;
$arguments524['size'] = 'small';
$arguments524['overlay'] = NULL;
$arguments524['state'] = 'default';
$arguments524['alternativeMarkupIdentifier'] = NULL;
$arguments524['identifier'] = 'actions-edit-delete';

$output520 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments524, $renderChildrenClosure525, $renderingContext);

$output520 .= '</a>
														';
return $output520;
};
$arguments518 = array();

$output517 .= '';

$output517 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
$output528 = '';

$output528 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure530 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments529 = array();
$arguments529['key'] = NULL;
$arguments529['id'] = NULL;
$arguments529['default'] = NULL;
$arguments529['htmlEscape'] = NULL;
$arguments529['arguments'] = NULL;
$arguments529['extensionName'] = NULL;
$arguments529['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output528 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments529, $renderChildrenClosure530, $renderingContext)]);

$output528 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure532 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments531 = array();
$arguments531['identifier'] = NULL;
$arguments531['size'] = 'small';
$arguments531['overlay'] = NULL;
$arguments531['state'] = 'default';
$arguments531['alternativeMarkupIdentifier'] = NULL;
$arguments531['identifier'] = 'actions-edit-delete';

$output528 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments531, $renderChildrenClosure532, $renderingContext);

$output528 .= '</button>
														';
return $output528;
};
$arguments526 = array();
$arguments526['if'] = NULL;

$output517 .= '';

$output517 .= '
													';
return $output517;
};
$arguments501 = array();
$arguments501['then'] = NULL;
$arguments501['else'] = NULL;
$arguments501['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array514 = array();
$array515 = array (
);$array514['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array515);

$expression516 = function($context) {return ($context["node0"]);};
$arguments501['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression516(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array514)
					),
					$renderingContext
				);
$arguments501['__thenClosure'] = function() use ($renderingContext, $self) {
$output503 = '';

$output503 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array504 = array (
);
$output503 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array504)]);

$output503 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments505 = array();
$arguments505['key'] = NULL;
$arguments505['id'] = NULL;
$arguments505['default'] = NULL;
$arguments505['htmlEscape'] = NULL;
$arguments505['arguments'] = NULL;
$arguments505['extensionName'] = NULL;
$arguments505['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output503 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext)]);

$output503 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure508 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments507 = array();
$arguments507['identifier'] = NULL;
$arguments507['size'] = 'small';
$arguments507['overlay'] = NULL;
$arguments507['state'] = 'default';
$arguments507['alternativeMarkupIdentifier'] = NULL;
$arguments507['identifier'] = 'actions-edit-delete';

$output503 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments507, $renderChildrenClosure508, $renderingContext);

$output503 .= '</a>
														';
return $output503;
};
$arguments501['__elseClosures'][] = function() use ($renderingContext, $self) {
$output509 = '';

$output509 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure511 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments510 = array();
$arguments510['key'] = NULL;
$arguments510['id'] = NULL;
$arguments510['default'] = NULL;
$arguments510['htmlEscape'] = NULL;
$arguments510['arguments'] = NULL;
$arguments510['extensionName'] = NULL;
$arguments510['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output509 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments510, $renderChildrenClosure511, $renderingContext)]);

$output509 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure513 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments512 = array();
$arguments512['identifier'] = NULL;
$arguments512['size'] = 'small';
$arguments512['overlay'] = NULL;
$arguments512['state'] = 'default';
$arguments512['alternativeMarkupIdentifier'] = NULL;
$arguments512['identifier'] = 'actions-edit-delete';

$output509 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments512, $renderChildrenClosure513, $renderingContext);

$output509 .= '</button>
														';
return $output509;
};

$output494 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments501, $renderChildrenClosure502, $renderingContext);

$output494 .= '
												';
return $output494;
};
$arguments492 = array();
$arguments492['if'] = NULL;

$output480 .= '';

$output480 .= '
											';
return $output480;
};
$arguments427 = array();
$arguments427['then'] = NULL;
$arguments427['else'] = NULL;
$arguments427['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array477 = array();
$array478 = array (
);$array477['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array478);

$expression479 = function($context) {return ($context["node0"]);};
$arguments427['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression479(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array477)
					),
					$renderingContext
				);
$arguments427['__thenClosure'] = function() use ($renderingContext, $self) {
$output429 = '';

$output429 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments430 = array();
$arguments430['key'] = NULL;
$arguments430['id'] = NULL;
$arguments430['default'] = NULL;
$arguments430['htmlEscape'] = NULL;
$arguments430['arguments'] = NULL;
$arguments430['extensionName'] = NULL;
$arguments430['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output429 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext)]);

$output429 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments432 = array();
$arguments432['identifier'] = NULL;
$arguments432['size'] = 'small';
$arguments432['overlay'] = NULL;
$arguments432['state'] = 'default';
$arguments432['alternativeMarkupIdentifier'] = NULL;
$arguments432['identifier'] = 't3-form-icon-duplicate';

$output429 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext);

$output429 .= '</button>
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure435 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments434 = array();
$arguments434['key'] = NULL;
$arguments434['id'] = NULL;
$arguments434['default'] = NULL;
$arguments434['htmlEscape'] = NULL;
$arguments434['arguments'] = NULL;
$arguments434['extensionName'] = NULL;
$arguments434['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output429 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments434, $renderChildrenClosure435, $renderingContext)]);

$output429 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments436 = array();
$arguments436['identifier'] = NULL;
$arguments436['size'] = 'small';
$arguments436['overlay'] = NULL;
$arguments436['state'] = 'default';
$arguments436['alternativeMarkupIdentifier'] = NULL;
$arguments436['identifier'] = 'actions-edit-delete';

$output429 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext);

$output429 .= '</button>
												';
return $output429;
};
$arguments427['__elseClosures'][] = function() use ($renderingContext, $self) {
$output438 = '';

$output438 .= '
													<a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array439 = array (
);
$output438 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array439)]);

$output438 .= '" data-form-name="';
$array440 = array (
);
$output438 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array440)]);

$output438 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments441 = array();
$arguments441['key'] = NULL;
$arguments441['id'] = NULL;
$arguments441['default'] = NULL;
$arguments441['htmlEscape'] = NULL;
$arguments441['arguments'] = NULL;
$arguments441['extensionName'] = NULL;
$arguments441['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output438 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments441, $renderChildrenClosure442, $renderingContext)]);

$output438 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments443 = array();
$arguments443['identifier'] = NULL;
$arguments443['size'] = 'small';
$arguments443['overlay'] = NULL;
$arguments443['state'] = 'default';
$arguments443['alternativeMarkupIdentifier'] = NULL;
$arguments443['identifier'] = 't3-form-icon-duplicate';

$output438 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext);

$output438 .= '</a>
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
$output461 = '';

$output461 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
$output464 = '';

$output464 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array465 = array (
);
$output464 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array465)]);

$output464 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments466 = array();
$arguments466['key'] = NULL;
$arguments466['id'] = NULL;
$arguments466['default'] = NULL;
$arguments466['htmlEscape'] = NULL;
$arguments466['arguments'] = NULL;
$arguments466['extensionName'] = NULL;
$arguments466['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output464 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext)]);

$output464 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments468 = array();
$arguments468['identifier'] = NULL;
$arguments468['size'] = 'small';
$arguments468['overlay'] = NULL;
$arguments468['state'] = 'default';
$arguments468['alternativeMarkupIdentifier'] = NULL;
$arguments468['identifier'] = 'actions-edit-delete';

$output464 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext);

$output464 .= '</a>
														';
return $output464;
};
$arguments462 = array();

$output461 .= '';

$output461 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
$output472 = '';

$output472 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure474 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments473 = array();
$arguments473['key'] = NULL;
$arguments473['id'] = NULL;
$arguments473['default'] = NULL;
$arguments473['htmlEscape'] = NULL;
$arguments473['arguments'] = NULL;
$arguments473['extensionName'] = NULL;
$arguments473['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output472 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments473, $renderChildrenClosure474, $renderingContext)]);

$output472 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure476 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments475 = array();
$arguments475['identifier'] = NULL;
$arguments475['size'] = 'small';
$arguments475['overlay'] = NULL;
$arguments475['state'] = 'default';
$arguments475['alternativeMarkupIdentifier'] = NULL;
$arguments475['identifier'] = 'actions-edit-delete';

$output472 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments475, $renderChildrenClosure476, $renderingContext);

$output472 .= '</button>
														';
return $output472;
};
$arguments470 = array();
$arguments470['if'] = NULL;

$output461 .= '';

$output461 .= '
													';
return $output461;
};
$arguments445 = array();
$arguments445['then'] = NULL;
$arguments445['else'] = NULL;
$arguments445['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array458 = array();
$array459 = array (
);$array458['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array459);

$expression460 = function($context) {return ($context["node0"]);};
$arguments445['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression460(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array458)
					),
					$renderingContext
				);
$arguments445['__thenClosure'] = function() use ($renderingContext, $self) {
$output447 = '';

$output447 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array448 = array (
);
$output447 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array448)]);

$output447 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure450 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments449 = array();
$arguments449['key'] = NULL;
$arguments449['id'] = NULL;
$arguments449['default'] = NULL;
$arguments449['htmlEscape'] = NULL;
$arguments449['arguments'] = NULL;
$arguments449['extensionName'] = NULL;
$arguments449['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output447 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments449, $renderChildrenClosure450, $renderingContext)]);

$output447 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure452 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments451 = array();
$arguments451['identifier'] = NULL;
$arguments451['size'] = 'small';
$arguments451['overlay'] = NULL;
$arguments451['state'] = 'default';
$arguments451['alternativeMarkupIdentifier'] = NULL;
$arguments451['identifier'] = 'actions-edit-delete';

$output447 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments451, $renderChildrenClosure452, $renderingContext);

$output447 .= '</a>
														';
return $output447;
};
$arguments445['__elseClosures'][] = function() use ($renderingContext, $self) {
$output453 = '';

$output453 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments454 = array();
$arguments454['key'] = NULL;
$arguments454['id'] = NULL;
$arguments454['default'] = NULL;
$arguments454['htmlEscape'] = NULL;
$arguments454['arguments'] = NULL;
$arguments454['extensionName'] = NULL;
$arguments454['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output453 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments454, $renderChildrenClosure455, $renderingContext)]);

$output453 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments456 = array();
$arguments456['identifier'] = NULL;
$arguments456['size'] = 'small';
$arguments456['overlay'] = NULL;
$arguments456['state'] = 'default';
$arguments456['alternativeMarkupIdentifier'] = NULL;
$arguments456['identifier'] = 'actions-edit-delete';

$output453 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);

$output453 .= '</button>
														';
return $output453;
};

$output438 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext);

$output438 .= '
												';
return $output438;
};

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext);

$output305 .= '
										</div>
									</td>
									<td class="nowrap">';
$array533 = array (
);
$output305 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array533)]);

$output305 .= '</td>
									<td class="nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure535 = function() use ($renderingContext, $self) {
$output545 = '';

$output545 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure547 = function() use ($renderingContext, $self) {
$output548 = '';

$output548 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array549 = array (
);
$output548 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array549)]);

$output548 .= '" data-form-name="';
$array550 = array (
);
$output548 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array550)]);

$output548 .= '">';
$array551 = array (
);
$output548 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array551)]);

$output548 .= '</a>
											';
return $output548;
};
$arguments546 = array();

$output545 .= '';

$output545 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure553 = function() use ($renderingContext, $self) {
$output554 = '';

$output554 .= '
												';
$array555 = array (
);
$output554 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array555)]);

$output554 .= '
											';
return $output554;
};
$arguments552 = array();
$arguments552['if'] = NULL;

$output545 .= '';

$output545 .= '
										';
return $output545;
};
$arguments534 = array();
$arguments534['then'] = NULL;
$arguments534['else'] = NULL;
$arguments534['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array542 = array();
$array543 = array (
);$array542['0'] = $renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array543);

$expression544 = function($context) {return ($context["node0"]);};
$arguments534['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression544(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array542)
					),
					$renderingContext
				);
$arguments534['__thenClosure'] = function() use ($renderingContext, $self) {
$output536 = '';

$output536 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array537 = array (
);
$output536 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array537)]);

$output536 .= '" data-form-name="';
$array538 = array (
);
$output536 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array538)]);

$output536 .= '">';
$array539 = array (
);
$output536 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array539)]);

$output536 .= '</a>
											';
return $output536;
};
$arguments534['__elseClosures'][] = function() use ($renderingContext, $self) {
$output540 = '';

$output540 .= '
												';
$array541 = array (
);
$output540 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array541)]);

$output540 .= '
											';
return $output540;
};

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments534, $renderChildrenClosure535, $renderingContext);

$output305 .= '
									</td>
								</tr>
							';
return $output305;
};
$arguments302 = array();
$arguments302['each'] = NULL;
$arguments302['as'] = NULL;
$arguments302['key'] = NULL;
$arguments302['reverse'] = false;
$arguments302['iteration'] = NULL;
$array304 = array (
);$arguments302['each'] = $renderingContext->getVariableProvider()->getByPath('forms', $array304);
$arguments302['as'] = 'form';

$output291 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);

$output291 .= '
						</tbody>
					</table>
				</div>
			</div>
		</div>
	';
return $output291;
};
$arguments289 = array();

$output288 .= '';

$output288 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
$output558 = '';

$output558 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure560 = function() use ($renderingContext, $self) {
$output563 = '';

$output563 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure565 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments564 = array();
$arguments564['key'] = NULL;
$arguments564['id'] = NULL;
$arguments564['default'] = NULL;
$arguments564['htmlEscape'] = NULL;
$arguments564['arguments'] = NULL;
$arguments564['extensionName'] = NULL;
$arguments564['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.no_forms';

$output563 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments564, $renderChildrenClosure565, $renderingContext)]);

$output563 .= '</p>
			<a class="btn btn-primary" data-identifier="newForm" href="#">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure567 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments566 = array();
$arguments566['key'] = NULL;
$arguments566['id'] = NULL;
$arguments566['default'] = NULL;
$arguments566['htmlEscape'] = NULL;
$arguments566['arguments'] = NULL;
$arguments566['extensionName'] = NULL;
$arguments566['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form';

$output563 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments566, $renderChildrenClosure567, $renderingContext)]);

$output563 .= '</a>
		';
return $output563;
};
$arguments559 = array();
$arguments559['message'] = NULL;
$arguments559['title'] = NULL;
$arguments559['state'] = -2;
$arguments559['iconName'] = NULL;
$arguments559['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure562 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments561 = array();
$arguments561['key'] = NULL;
$arguments561['id'] = NULL;
$arguments561['default'] = NULL;
$arguments561['htmlEscape'] = NULL;
$arguments561['arguments'] = NULL;
$arguments561['extensionName'] = NULL;
$arguments561['key'] = 'formManager.no_forms';
$arguments561['extensionName'] = 'form';
$arguments559['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments561, $renderChildrenClosure562, $renderingContext);
$arguments559['state'] = -1;
$renderChildrenClosure560 = $arguments559['message'] ? function() use ($arguments559) { return $arguments559['message']; } : $renderChildrenClosure560;
$output558 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments559, $renderChildrenClosure560, $renderingContext);

$output558 .= '
	';
return $output558;
};
$arguments556 = array();
$arguments556['if'] = NULL;

$output288 .= '';

$output288 .= '
';
return $output288;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array285 = array();
$array286 = array (
);$array285['0'] = $renderingContext->getVariableProvider()->getByPath('forms', $array286);

$expression287 = function($context) {return ($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression287(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array285)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
			<div class="panel panel-space panel-default recordlist">
				<div class="panel-heading">
					<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['htmlEscape'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_existing_forms';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output10 .= '</span>
				</div>
				<div class="collapse in">
					<div class="table-fit">
						<table id="forms" class="table table-striped table-hover">
							<thead>
								<tr>
									<th class="col-icon nowrap"><a class="btn btn-default" data-identifier="newForm" href="#">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['identifier'] = NULL;
$arguments13['size'] = 'small';
$arguments13['overlay'] = NULL;
$arguments13['state'] = 'default';
$arguments13['alternativeMarkupIdentifier'] = NULL;
$arguments13['identifier'] = 'actions-add';

$output10 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output10 .= '</a></th>
									<th class="col-title col-responsive nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['key'] = NULL;
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.form_name';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output10 .= '</th>
									<th class="col-control nowrap"></th>
									<th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['htmlEscape'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.location';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output10 .= '</th>
									<th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['htmlEscape'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.references';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output10 .= '</th>
								</tr>
							</thead>
							<tbody>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
								<tr>
									<td class="col-icon nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
												<span title="';
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
$arguments51['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output50 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['identifier'] = NULL;
$arguments53['size'] = 'small';
$arguments53['overlay'] = NULL;
$arguments53['state'] = 'default';
$arguments53['alternativeMarkupIdentifier'] = NULL;
$arguments53['identifier'] = 'overlay-missing';

$output50 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output50 .= '
												</span>
											';
return $output50;
};
$arguments48 = array();

$output47 .= '';

$output47 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['key'] = NULL;
$arguments61['id'] = NULL;
$arguments61['default'] = NULL;
$arguments61['htmlEscape'] = NULL;
$arguments61['arguments'] = NULL;
$arguments61['extensionName'] = NULL;
$arguments61['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output60 .= ' ';
$array63 = array (
);
$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array63)]);

$output60 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['identifier'] = NULL;
$arguments64['size'] = 'small';
$arguments64['overlay'] = NULL;
$arguments64['state'] = 'default';
$arguments64['alternativeMarkupIdentifier'] = NULL;
$arguments64['identifier'] = 'overlay-missing';

$output60 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output60 .= '
												</span>
											';
return $output60;
};
$arguments55 = array();
$arguments55['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array57 = array();
$array58 = array (
);$array57['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array58);

$expression59 = function($context) {return ($context["node0"]);};
$arguments55['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression59(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array57)
					),
					$renderingContext
				);

$output47 .= '';

$output47 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
												<span title="id=';
$array69 = array (
);
$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array69)]);

$output68 .= '" data-toggle="tooltip" data-placement="right">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['identifier'] = NULL;
$arguments70['size'] = 'small';
$arguments70['overlay'] = NULL;
$arguments70['state'] = 'default';
$arguments70['alternativeMarkupIdentifier'] = NULL;
$arguments70['identifier'] = 'content-elements-mailform';

$output68 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output68 .= '
												</span>
											';
return $output68;
};
$arguments66 = array();
$arguments66['if'] = NULL;

$output47 .= '';

$output47 .= '
										';
return $output47;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array44 = array();
$array45 = array (
);$array44['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array45);

$expression46 = function($context) {return ($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression46(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)
					),
					$renderingContext
				);
$arguments25['__thenClosure'] = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['key'] = NULL;
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['htmlEscape'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output27 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['identifier'] = NULL;
$arguments30['size'] = 'small';
$arguments30['overlay'] = NULL;
$arguments30['state'] = 'default';
$arguments30['alternativeMarkupIdentifier'] = NULL;
$arguments30['identifier'] = 'overlay-missing';

$output27 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output27 .= '
												</span>
											';
return $output27;
};
$arguments25['__elseClosures'][] = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['key'] = NULL;
$arguments33['id'] = NULL;
$arguments33['default'] = NULL;
$arguments33['htmlEscape'] = NULL;
$arguments33['arguments'] = NULL;
$arguments33['extensionName'] = NULL;
$arguments33['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);

$output32 .= ' ';
$array35 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array35)]);

$output32 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['identifier'] = NULL;
$arguments36['size'] = 'small';
$arguments36['overlay'] = NULL;
$arguments36['state'] = 'default';
$arguments36['alternativeMarkupIdentifier'] = NULL;
$arguments36['identifier'] = 'overlay-missing';

$output32 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output32 .= '
												</span>
											';
return $output32;
};
$arguments25['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Array
$array38 = array();
$array39 = array (
);$array38['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array39);

return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateStack($renderingContext, $array38);
};
$arguments25['__elseClosures'][] = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
												<span title="id=';
$array41 = array (
);
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array41)]);

$output40 .= '" data-toggle="tooltip" data-placement="right">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['identifier'] = NULL;
$arguments42['size'] = 'small';
$arguments42['overlay'] = NULL;
$arguments42['state'] = 'default';
$arguments42['alternativeMarkupIdentifier'] = NULL;
$arguments42['identifier'] = 'content-elements-mailform';

$output40 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output40 .= '
												</span>
											';
return $output40;
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
									</td>
									<td class="col-title col-responsive nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
													<div title="';
$array94 = array (
);
$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array94)]);

$output93 .= '">';
$array95 = array (
);
$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array95)]);

$output93 .= '</div>
												';
return $output93;
};
$arguments91 = array();

$output90 .= '';

$output90 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$array106 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array106)]);
};
$arguments99 = array();
$arguments99['action'] = NULL;
$arguments99['arguments'] = array (
);
$arguments99['controller'] = NULL;
$arguments99['extensionName'] = NULL;
$arguments99['pluginName'] = NULL;
$arguments99['pageUid'] = NULL;
$arguments99['pageType'] = 0;
$arguments99['noCache'] = false;
$arguments99['noCacheHash'] = false;
$arguments99['section'] = '';
$arguments99['format'] = '';
$arguments99['linkAccessRestrictedPages'] = false;
$arguments99['additionalParams'] = array (
);
$arguments99['absolute'] = false;
$arguments99['addQueryString'] = false;
$arguments99['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments99['addQueryStringMethod'] = NULL;
$arguments99['additionalAttributes'] = NULL;
$arguments99['data'] = NULL;
$arguments99['class'] = NULL;
$arguments99['dir'] = NULL;
$arguments99['id'] = NULL;
$arguments99['lang'] = NULL;
$arguments99['style'] = NULL;
$arguments99['title'] = NULL;
$arguments99['accesskey'] = NULL;
$arguments99['tabindex'] = NULL;
$arguments99['onclick'] = NULL;
$arguments99['name'] = NULL;
$arguments99['rel'] = NULL;
$arguments99['rev'] = NULL;
$arguments99['target'] = NULL;
$arguments99['controller'] = 'FormEditor';
$arguments99['action'] = 'index';
// Rendering Array
$array101 = array();
$array102 = array (
);$array101['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array102);
$arguments99['arguments'] = $array101;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments103 = array();
$arguments103['key'] = NULL;
$arguments103['id'] = NULL;
$arguments103['default'] = NULL;
$arguments103['htmlEscape'] = NULL;
$arguments103['arguments'] = NULL;
$arguments103['extensionName'] = NULL;
$arguments103['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments99['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);
// Rendering Array
$array105 = array();
$array105['toggle'] = 'tooltip';
$array105['placement'] = 'right';
$arguments99['data'] = $array105;

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= '
												';
return $output98;
};
$arguments96 = array();
$arguments96['if'] = NULL;

$output90 .= '';

$output90 .= '
										';
return $output90;
};
$arguments72 = array();
$arguments72['then'] = NULL;
$arguments72['else'] = NULL;
$arguments72['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array86 = array();
$array87 = array (
);$array86['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array87);
$array86['1'] = ' || ';
$array88 = array (
);$array86['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array88);

$expression89 = function($context) {return (($context["node0"]) || ($context["node2"]));};
$arguments72['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression89(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array86)
					),
					$renderingContext
				);
$arguments72['__thenClosure'] = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
													<div title="';
$array75 = array (
);
$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array75)]);

$output74 .= '">';
$array76 = array (
);
$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array76)]);

$output74 .= '</div>
												';
return $output74;
};
$arguments72['__elseClosures'][] = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$array85 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array85)]);
};
$arguments78 = array();
$arguments78['action'] = NULL;
$arguments78['arguments'] = array (
);
$arguments78['controller'] = NULL;
$arguments78['extensionName'] = NULL;
$arguments78['pluginName'] = NULL;
$arguments78['pageUid'] = NULL;
$arguments78['pageType'] = 0;
$arguments78['noCache'] = false;
$arguments78['noCacheHash'] = false;
$arguments78['section'] = '';
$arguments78['format'] = '';
$arguments78['linkAccessRestrictedPages'] = false;
$arguments78['additionalParams'] = array (
);
$arguments78['absolute'] = false;
$arguments78['addQueryString'] = false;
$arguments78['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments78['addQueryStringMethod'] = NULL;
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['class'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['name'] = NULL;
$arguments78['rel'] = NULL;
$arguments78['rev'] = NULL;
$arguments78['target'] = NULL;
$arguments78['controller'] = 'FormEditor';
$arguments78['action'] = 'index';
// Rendering Array
$array80 = array();
$array81 = array (
);$array80['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array81);
$arguments78['arguments'] = $array80;
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
$arguments82['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments78['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);
// Rendering Array
$array84 = array();
$array84['toggle'] = 'tooltip';
$array84['placement'] = 'right';
$arguments78['data'] = $array84;

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
												';
return $output77;
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output24 .= '
									</td>
									<td class="col-control nowrap">
										<div class="btn-group" role="group">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments131 = array();
$arguments131['key'] = NULL;
$arguments131['id'] = NULL;
$arguments131['default'] = NULL;
$arguments131['htmlEscape'] = NULL;
$arguments131['arguments'] = NULL;
$arguments131['extensionName'] = NULL;
$arguments131['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output130 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext)]);

$output130 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['identifier'] = NULL;
$arguments133['size'] = 'small';
$arguments133['overlay'] = NULL;
$arguments133['state'] = 'default';
$arguments133['alternativeMarkupIdentifier'] = NULL;
$arguments133['identifier'] = 'actions-open';

$output130 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output130 .= '</button>
												';
return $output130;
};
$arguments128 = array();

$output127 .= '';

$output127 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['identifier'] = NULL;
$arguments144['size'] = 'small';
$arguments144['overlay'] = NULL;
$arguments144['state'] = 'default';
$arguments144['alternativeMarkupIdentifier'] = NULL;
$arguments144['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);
};
$arguments138 = array();
$arguments138['action'] = NULL;
$arguments138['arguments'] = array (
);
$arguments138['controller'] = NULL;
$arguments138['extensionName'] = NULL;
$arguments138['pluginName'] = NULL;
$arguments138['pageUid'] = NULL;
$arguments138['pageType'] = 0;
$arguments138['noCache'] = false;
$arguments138['noCacheHash'] = false;
$arguments138['section'] = '';
$arguments138['format'] = '';
$arguments138['linkAccessRestrictedPages'] = false;
$arguments138['additionalParams'] = array (
);
$arguments138['absolute'] = false;
$arguments138['addQueryString'] = false;
$arguments138['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments138['addQueryStringMethod'] = NULL;
$arguments138['additionalAttributes'] = NULL;
$arguments138['data'] = NULL;
$arguments138['class'] = NULL;
$arguments138['dir'] = NULL;
$arguments138['id'] = NULL;
$arguments138['lang'] = NULL;
$arguments138['style'] = NULL;
$arguments138['title'] = NULL;
$arguments138['accesskey'] = NULL;
$arguments138['tabindex'] = NULL;
$arguments138['onclick'] = NULL;
$arguments138['name'] = NULL;
$arguments138['rel'] = NULL;
$arguments138['rev'] = NULL;
$arguments138['target'] = NULL;
$arguments138['controller'] = 'FormEditor';
$arguments138['action'] = 'index';
// Rendering Array
$array140 = array();
$array141 = array (
);$array140['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array141);
$arguments138['arguments'] = $array140;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['key'] = NULL;
$arguments142['id'] = NULL;
$arguments142['default'] = NULL;
$arguments142['htmlEscape'] = NULL;
$arguments142['arguments'] = NULL;
$arguments142['extensionName'] = NULL;
$arguments142['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments138['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);
$arguments138['class'] = 'btn btn-default form-record-open';

$output137 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '
												';
return $output137;
};
$arguments135 = array();
$arguments135['if'] = NULL;

$output127 .= '';

$output127 .= '
											';
return $output127;
};
$arguments107 = array();
$arguments107['then'] = NULL;
$arguments107['else'] = NULL;
$arguments107['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array123 = array();
$array124 = array (
);$array123['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array124);
$array123['1'] = ' || ';
$array125 = array (
);$array123['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array125);

$expression126 = function($context) {return (($context["node0"]) || ($context["node2"]));};
$arguments107['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression126(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array123)
					),
					$renderingContext
				);
$arguments107['__thenClosure'] = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['key'] = NULL;
$arguments110['id'] = NULL;
$arguments110['default'] = NULL;
$arguments110['htmlEscape'] = NULL;
$arguments110['arguments'] = NULL;
$arguments110['extensionName'] = NULL;
$arguments110['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output109 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext)]);

$output109 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['identifier'] = NULL;
$arguments112['size'] = 'small';
$arguments112['overlay'] = NULL;
$arguments112['state'] = 'default';
$arguments112['alternativeMarkupIdentifier'] = NULL;
$arguments112['identifier'] = 'actions-open';

$output109 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output109 .= '</button>
												';
return $output109;
};
$arguments107['__elseClosures'][] = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['identifier'] = NULL;
$arguments121['size'] = 'small';
$arguments121['overlay'] = NULL;
$arguments121['state'] = 'default';
$arguments121['alternativeMarkupIdentifier'] = NULL;
$arguments121['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);
};
$arguments115 = array();
$arguments115['action'] = NULL;
$arguments115['arguments'] = array (
);
$arguments115['controller'] = NULL;
$arguments115['extensionName'] = NULL;
$arguments115['pluginName'] = NULL;
$arguments115['pageUid'] = NULL;
$arguments115['pageType'] = 0;
$arguments115['noCache'] = false;
$arguments115['noCacheHash'] = false;
$arguments115['section'] = '';
$arguments115['format'] = '';
$arguments115['linkAccessRestrictedPages'] = false;
$arguments115['additionalParams'] = array (
);
$arguments115['absolute'] = false;
$arguments115['addQueryString'] = false;
$arguments115['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments115['addQueryStringMethod'] = NULL;
$arguments115['additionalAttributes'] = NULL;
$arguments115['data'] = NULL;
$arguments115['class'] = NULL;
$arguments115['dir'] = NULL;
$arguments115['id'] = NULL;
$arguments115['lang'] = NULL;
$arguments115['style'] = NULL;
$arguments115['title'] = NULL;
$arguments115['accesskey'] = NULL;
$arguments115['tabindex'] = NULL;
$arguments115['onclick'] = NULL;
$arguments115['name'] = NULL;
$arguments115['rel'] = NULL;
$arguments115['rev'] = NULL;
$arguments115['target'] = NULL;
$arguments115['controller'] = 'FormEditor';
$arguments115['action'] = 'index';
// Rendering Array
$array117 = array();
$array118 = array (
);$array117['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array118);
$arguments115['arguments'] = $array117;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['key'] = NULL;
$arguments119['id'] = NULL;
$arguments119['default'] = NULL;
$arguments119['htmlEscape'] = NULL;
$arguments119['arguments'] = NULL;
$arguments119['extensionName'] = NULL;
$arguments119['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments115['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);
$arguments115['class'] = 'btn btn-default form-record-open';

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '
												';
return $output114;
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output24 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output199 = '';

$output199 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
$output202 = '';

$output202 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['key'] = NULL;
$arguments203['id'] = NULL;
$arguments203['default'] = NULL;
$arguments203['htmlEscape'] = NULL;
$arguments203['arguments'] = NULL;
$arguments203['extensionName'] = NULL;
$arguments203['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output202 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext)]);

$output202 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments205 = array();
$arguments205['identifier'] = NULL;
$arguments205['size'] = 'small';
$arguments205['overlay'] = NULL;
$arguments205['state'] = 'default';
$arguments205['alternativeMarkupIdentifier'] = NULL;
$arguments205['identifier'] = 't3-form-icon-duplicate';

$output202 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output202 .= '</button>
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['key'] = NULL;
$arguments207['id'] = NULL;
$arguments207['default'] = NULL;
$arguments207['htmlEscape'] = NULL;
$arguments207['arguments'] = NULL;
$arguments207['extensionName'] = NULL;
$arguments207['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output202 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext)]);

$output202 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments209 = array();
$arguments209['identifier'] = NULL;
$arguments209['size'] = 'small';
$arguments209['overlay'] = NULL;
$arguments209['state'] = 'default';
$arguments209['alternativeMarkupIdentifier'] = NULL;
$arguments209['identifier'] = 'actions-edit-delete';

$output202 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output202 .= '</button>
												';
return $output202;
};
$arguments200 = array();

$output199 .= '';

$output199 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$output213 = '';

$output213 .= '
													<a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array214 = array (
);
$output213 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array214)]);

$output213 .= '" data-form-name="';
$array215 = array (
);
$output213 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array215)]);

$output213 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments216 = array();
$arguments216['key'] = NULL;
$arguments216['id'] = NULL;
$arguments216['default'] = NULL;
$arguments216['htmlEscape'] = NULL;
$arguments216['arguments'] = NULL;
$arguments216['extensionName'] = NULL;
$arguments216['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output213 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext)]);

$output213 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['identifier'] = NULL;
$arguments218['size'] = 'small';
$arguments218['overlay'] = NULL;
$arguments218['state'] = 'default';
$arguments218['alternativeMarkupIdentifier'] = NULL;
$arguments218['identifier'] = 't3-form-icon-duplicate';

$output213 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output213 .= '</a>
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array240 = array (
);
$output239 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array240)]);

$output239 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['key'] = NULL;
$arguments241['id'] = NULL;
$arguments241['default'] = NULL;
$arguments241['htmlEscape'] = NULL;
$arguments241['arguments'] = NULL;
$arguments241['extensionName'] = NULL;
$arguments241['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output239 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext)]);

$output239 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['identifier'] = NULL;
$arguments243['size'] = 'small';
$arguments243['overlay'] = NULL;
$arguments243['state'] = 'default';
$arguments243['alternativeMarkupIdentifier'] = NULL;
$arguments243['identifier'] = 'actions-edit-delete';

$output239 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output239 .= '</a>
														';
return $output239;
};
$arguments237 = array();

$output236 .= '';

$output236 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$output247 = '';

$output247 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments248 = array();
$arguments248['key'] = NULL;
$arguments248['id'] = NULL;
$arguments248['default'] = NULL;
$arguments248['htmlEscape'] = NULL;
$arguments248['arguments'] = NULL;
$arguments248['extensionName'] = NULL;
$arguments248['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output247 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext)]);

$output247 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments250 = array();
$arguments250['identifier'] = NULL;
$arguments250['size'] = 'small';
$arguments250['overlay'] = NULL;
$arguments250['state'] = 'default';
$arguments250['alternativeMarkupIdentifier'] = NULL;
$arguments250['identifier'] = 'actions-edit-delete';

$output247 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output247 .= '</button>
														';
return $output247;
};
$arguments245 = array();
$arguments245['if'] = NULL;

$output236 .= '';

$output236 .= '
													';
return $output236;
};
$arguments220 = array();
$arguments220['then'] = NULL;
$arguments220['else'] = NULL;
$arguments220['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array233 = array();
$array234 = array (
);$array233['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array234);

$expression235 = function($context) {return ($context["node0"]);};
$arguments220['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression235(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array233)
					),
					$renderingContext
				);
$arguments220['__thenClosure'] = function() use ($renderingContext, $self) {
$output222 = '';

$output222 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array223 = array (
);
$output222 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array223)]);

$output222 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments224 = array();
$arguments224['key'] = NULL;
$arguments224['id'] = NULL;
$arguments224['default'] = NULL;
$arguments224['htmlEscape'] = NULL;
$arguments224['arguments'] = NULL;
$arguments224['extensionName'] = NULL;
$arguments224['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output222 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext)]);

$output222 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['identifier'] = NULL;
$arguments226['size'] = 'small';
$arguments226['overlay'] = NULL;
$arguments226['state'] = 'default';
$arguments226['alternativeMarkupIdentifier'] = NULL;
$arguments226['identifier'] = 'actions-edit-delete';

$output222 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output222 .= '</a>
														';
return $output222;
};
$arguments220['__elseClosures'][] = function() use ($renderingContext, $self) {
$output228 = '';

$output228 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['key'] = NULL;
$arguments229['id'] = NULL;
$arguments229['default'] = NULL;
$arguments229['htmlEscape'] = NULL;
$arguments229['arguments'] = NULL;
$arguments229['extensionName'] = NULL;
$arguments229['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output228 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext)]);

$output228 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['identifier'] = NULL;
$arguments231['size'] = 'small';
$arguments231['overlay'] = NULL;
$arguments231['state'] = 'default';
$arguments231['alternativeMarkupIdentifier'] = NULL;
$arguments231['identifier'] = 'actions-edit-delete';

$output228 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output228 .= '</button>
														';
return $output228;
};

$output213 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output213 .= '
												';
return $output213;
};
$arguments211 = array();
$arguments211['if'] = NULL;

$output199 .= '';

$output199 .= '
											';
return $output199;
};
$arguments146 = array();
$arguments146['then'] = NULL;
$arguments146['else'] = NULL;
$arguments146['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array196 = array();
$array197 = array (
);$array196['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array197);

$expression198 = function($context) {return ($context["node0"]);};
$arguments146['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression198(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array196)
					),
					$renderingContext
				);
$arguments146['__thenClosure'] = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
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
$arguments149['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext)]);

$output148 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['identifier'] = NULL;
$arguments151['size'] = 'small';
$arguments151['overlay'] = NULL;
$arguments151['state'] = 'default';
$arguments151['alternativeMarkupIdentifier'] = NULL;
$arguments151['identifier'] = 't3-form-icon-duplicate';

$output148 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output148 .= '</button>
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['key'] = NULL;
$arguments153['id'] = NULL;
$arguments153['default'] = NULL;
$arguments153['htmlEscape'] = NULL;
$arguments153['arguments'] = NULL;
$arguments153['extensionName'] = NULL;
$arguments153['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext)]);

$output148 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['identifier'] = NULL;
$arguments155['size'] = 'small';
$arguments155['overlay'] = NULL;
$arguments155['state'] = 'default';
$arguments155['alternativeMarkupIdentifier'] = NULL;
$arguments155['identifier'] = 'actions-edit-delete';

$output148 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output148 .= '</button>
												';
return $output148;
};
$arguments146['__elseClosures'][] = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
													<a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array158 = array (
);
$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array158)]);

$output157 .= '" data-form-name="';
$array159 = array (
);
$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array159)]);

$output157 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments160 = array();
$arguments160['key'] = NULL;
$arguments160['id'] = NULL;
$arguments160['default'] = NULL;
$arguments160['htmlEscape'] = NULL;
$arguments160['arguments'] = NULL;
$arguments160['extensionName'] = NULL;
$arguments160['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext)]);

$output157 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['identifier'] = NULL;
$arguments162['size'] = 'small';
$arguments162['overlay'] = NULL;
$arguments162['state'] = 'default';
$arguments162['alternativeMarkupIdentifier'] = NULL;
$arguments162['identifier'] = 't3-form-icon-duplicate';

$output157 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output157 .= '</a>
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$output180 = '';

$output180 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$output183 = '';

$output183 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array184 = array (
);
$output183 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array184)]);

$output183 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['key'] = NULL;
$arguments185['id'] = NULL;
$arguments185['default'] = NULL;
$arguments185['htmlEscape'] = NULL;
$arguments185['arguments'] = NULL;
$arguments185['extensionName'] = NULL;
$arguments185['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output183 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext)]);

$output183 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['identifier'] = NULL;
$arguments187['size'] = 'small';
$arguments187['overlay'] = NULL;
$arguments187['state'] = 'default';
$arguments187['alternativeMarkupIdentifier'] = NULL;
$arguments187['identifier'] = 'actions-edit-delete';

$output183 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output183 .= '</a>
														';
return $output183;
};
$arguments181 = array();

$output180 .= '';

$output180 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['key'] = NULL;
$arguments192['id'] = NULL;
$arguments192['default'] = NULL;
$arguments192['htmlEscape'] = NULL;
$arguments192['arguments'] = NULL;
$arguments192['extensionName'] = NULL;
$arguments192['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output191 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext)]);

$output191 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments194 = array();
$arguments194['identifier'] = NULL;
$arguments194['size'] = 'small';
$arguments194['overlay'] = NULL;
$arguments194['state'] = 'default';
$arguments194['alternativeMarkupIdentifier'] = NULL;
$arguments194['identifier'] = 'actions-edit-delete';

$output191 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output191 .= '</button>
														';
return $output191;
};
$arguments189 = array();
$arguments189['if'] = NULL;

$output180 .= '';

$output180 .= '
													';
return $output180;
};
$arguments164 = array();
$arguments164['then'] = NULL;
$arguments164['else'] = NULL;
$arguments164['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array177 = array();
$array178 = array (
);$array177['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array178);

$expression179 = function($context) {return ($context["node0"]);};
$arguments164['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression179(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array177)
					),
					$renderingContext
				);
$arguments164['__thenClosure'] = function() use ($renderingContext, $self) {
$output166 = '';

$output166 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array167 = array (
);
$output166 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array167)]);

$output166 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments168 = array();
$arguments168['key'] = NULL;
$arguments168['id'] = NULL;
$arguments168['default'] = NULL;
$arguments168['htmlEscape'] = NULL;
$arguments168['arguments'] = NULL;
$arguments168['extensionName'] = NULL;
$arguments168['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output166 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext)]);

$output166 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments170 = array();
$arguments170['identifier'] = NULL;
$arguments170['size'] = 'small';
$arguments170['overlay'] = NULL;
$arguments170['state'] = 'default';
$arguments170['alternativeMarkupIdentifier'] = NULL;
$arguments170['identifier'] = 'actions-edit-delete';

$output166 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output166 .= '</a>
														';
return $output166;
};
$arguments164['__elseClosures'][] = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['key'] = NULL;
$arguments173['id'] = NULL;
$arguments173['default'] = NULL;
$arguments173['htmlEscape'] = NULL;
$arguments173['arguments'] = NULL;
$arguments173['extensionName'] = NULL;
$arguments173['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext)]);

$output172 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['identifier'] = NULL;
$arguments175['size'] = 'small';
$arguments175['overlay'] = NULL;
$arguments175['state'] = 'default';
$arguments175['alternativeMarkupIdentifier'] = NULL;
$arguments175['identifier'] = 'actions-edit-delete';

$output172 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output172 .= '</button>
														';
return $output172;
};

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output157 .= '
												';
return $output157;
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output24 .= '
										</div>
									</td>
									<td class="nowrap">';
$array252 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array252)]);

$output24 .= '</td>
									<td class="nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$output264 = '';

$output264 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
$output267 = '';

$output267 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array268 = array (
);
$output267 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array268)]);

$output267 .= '" data-form-name="';
$array269 = array (
);
$output267 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array269)]);

$output267 .= '">';
$array270 = array (
);
$output267 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array270)]);

$output267 .= '</a>
											';
return $output267;
};
$arguments265 = array();

$output264 .= '';

$output264 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
$output273 = '';

$output273 .= '
												';
$array274 = array (
);
$output273 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array274)]);

$output273 .= '
											';
return $output273;
};
$arguments271 = array();
$arguments271['if'] = NULL;

$output264 .= '';

$output264 .= '
										';
return $output264;
};
$arguments253 = array();
$arguments253['then'] = NULL;
$arguments253['else'] = NULL;
$arguments253['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array261 = array();
$array262 = array (
);$array261['0'] = $renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array262);

$expression263 = function($context) {return ($context["node0"]);};
$arguments253['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression263(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array261)
					),
					$renderingContext
				);
$arguments253['__thenClosure'] = function() use ($renderingContext, $self) {
$output255 = '';

$output255 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array256 = array (
);
$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array256)]);

$output255 .= '" data-form-name="';
$array257 = array (
);
$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array257)]);

$output255 .= '">';
$array258 = array (
);
$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array258)]);

$output255 .= '</a>
											';
return $output255;
};
$arguments253['__elseClosures'][] = function() use ($renderingContext, $self) {
$output259 = '';

$output259 .= '
												';
$array260 = array (
);
$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array260)]);

$output259 .= '
											';
return $output259;
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output24 .= '
									</td>
								</tr>
							';
return $output24;
};
$arguments21 = array();
$arguments21['each'] = NULL;
$arguments21['as'] = NULL;
$arguments21['key'] = NULL;
$arguments21['reverse'] = false;
$arguments21['iteration'] = NULL;
$array23 = array (
);$arguments21['each'] = $renderingContext->getVariableProvider()->getByPath('forms', $array23);
$arguments21['as'] = 'form';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output10 .= '
						</tbody>
					</table>
				</div>
			</div>
		</div>
	';
return $output10;
};
$arguments8['__elseClosures'][] = function() use ($renderingContext, $self) {
$output275 = '';

$output275 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
			<p>';
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
$arguments281['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.no_forms';

$output280 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext)]);

$output280 .= '</p>
			<a class="btn btn-primary" data-identifier="newForm" href="#">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments283 = array();
$arguments283['key'] = NULL;
$arguments283['id'] = NULL;
$arguments283['default'] = NULL;
$arguments283['htmlEscape'] = NULL;
$arguments283['arguments'] = NULL;
$arguments283['extensionName'] = NULL;
$arguments283['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form';

$output280 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext)]);

$output280 .= '</a>
		';
return $output280;
};
$arguments276 = array();
$arguments276['message'] = NULL;
$arguments276['title'] = NULL;
$arguments276['state'] = -2;
$arguments276['iconName'] = NULL;
$arguments276['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments278 = array();
$arguments278['key'] = NULL;
$arguments278['id'] = NULL;
$arguments278['default'] = NULL;
$arguments278['htmlEscape'] = NULL;
$arguments278['arguments'] = NULL;
$arguments278['extensionName'] = NULL;
$arguments278['key'] = 'formManager.no_forms';
$arguments278['extensionName'] = 'form';
$arguments276['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);
$arguments276['state'] = -1;
$renderChildrenClosure277 = $arguments276['message'] ? function() use ($arguments276) { return $arguments276['message']; } : $renderChildrenClosure277;
$output275 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);

$output275 .= '
	';
return $output275;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output568 = '';

$output568 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments569 = array();
$arguments569['name'] = NULL;
$arguments569['name'] = 'FormManager';

$output568 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output568 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure572 = function() use ($renderingContext, $self) {
$output573 = '';

$output573 .= '

	<script type="text/javascript">
		require([\'';
$array574 = array (
);
$output573 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dynamicRequireJsModules.app', $array574)]);

$output573 .= '\', \'';
$array575 = array (
);
$output573 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dynamicRequireJsModules.viewModel', $array575)]);

$output573 .= '\'], function (formManagerApp, viewModel) {
			var FORMMANAGER_APP = formManagerApp.getInstance(
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure577 = function() use ($renderingContext, $self) {
$array578 = array (
);return $renderingContext->getVariableProvider()->getByPath('formManagerAppInitialData', $array578);
};
$arguments576 = array();
$arguments576['value'] = NULL;
$arguments576['keepQuotes'] = false;
$arguments576['encoding'] = NULL;
$renderChildrenClosure577 = $arguments576['value'] ? function() use ($arguments576) { return $arguments576['value']; } : $renderChildrenClosure577;
$output573 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments576, $renderChildrenClosure577, $renderingContext);

$output573 .= ',
				viewModel
			).run();
		});
	</script>
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure580 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments579 = array();
$arguments579['key'] = NULL;
$arguments579['id'] = NULL;
$arguments579['default'] = NULL;
$arguments579['htmlEscape'] = NULL;
$arguments579['arguments'] = NULL;
$arguments579['extensionName'] = NULL;
$arguments579['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.headline';

$output573 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments579, $renderChildrenClosure580, $renderingContext)]);

$output573 .= '</h1>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure582 = function() use ($renderingContext, $self) {
$output861 = '';

$output861 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure863 = function() use ($renderingContext, $self) {
$output864 = '';

$output864 .= '
			<div class="panel panel-space panel-default recordlist">
				<div class="panel-heading">
					<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure866 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments865 = array();
$arguments865['key'] = NULL;
$arguments865['id'] = NULL;
$arguments865['default'] = NULL;
$arguments865['htmlEscape'] = NULL;
$arguments865['arguments'] = NULL;
$arguments865['extensionName'] = NULL;
$arguments865['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_existing_forms';

$output864 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments865, $renderChildrenClosure866, $renderingContext)]);

$output864 .= '</span>
				</div>
				<div class="collapse in">
					<div class="table-fit">
						<table id="forms" class="table table-striped table-hover">
							<thead>
								<tr>
									<th class="col-icon nowrap"><a class="btn btn-default" data-identifier="newForm" href="#">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure868 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments867 = array();
$arguments867['identifier'] = NULL;
$arguments867['size'] = 'small';
$arguments867['overlay'] = NULL;
$arguments867['state'] = 'default';
$arguments867['alternativeMarkupIdentifier'] = NULL;
$arguments867['identifier'] = 'actions-add';

$output864 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments867, $renderChildrenClosure868, $renderingContext);

$output864 .= '</a></th>
									<th class="col-title col-responsive nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure870 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments869 = array();
$arguments869['key'] = NULL;
$arguments869['id'] = NULL;
$arguments869['default'] = NULL;
$arguments869['htmlEscape'] = NULL;
$arguments869['arguments'] = NULL;
$arguments869['extensionName'] = NULL;
$arguments869['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.form_name';

$output864 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments869, $renderChildrenClosure870, $renderingContext)]);

$output864 .= '</th>
									<th class="col-control nowrap"></th>
									<th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure872 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments871 = array();
$arguments871['key'] = NULL;
$arguments871['id'] = NULL;
$arguments871['default'] = NULL;
$arguments871['htmlEscape'] = NULL;
$arguments871['arguments'] = NULL;
$arguments871['extensionName'] = NULL;
$arguments871['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.location';

$output864 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments871, $renderChildrenClosure872, $renderingContext)]);

$output864 .= '</th>
									<th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure874 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments873 = array();
$arguments873['key'] = NULL;
$arguments873['id'] = NULL;
$arguments873['default'] = NULL;
$arguments873['htmlEscape'] = NULL;
$arguments873['arguments'] = NULL;
$arguments873['extensionName'] = NULL;
$arguments873['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.references';

$output864 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments873, $renderChildrenClosure874, $renderingContext)]);

$output864 .= '</th>
								</tr>
							</thead>
							<tbody>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure876 = function() use ($renderingContext, $self) {
$output878 = '';

$output878 .= '
								<tr>
									<td class="col-icon nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure880 = function() use ($renderingContext, $self) {
$output901 = '';

$output901 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure903 = function() use ($renderingContext, $self) {
$output904 = '';

$output904 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure906 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments905 = array();
$arguments905['key'] = NULL;
$arguments905['id'] = NULL;
$arguments905['default'] = NULL;
$arguments905['htmlEscape'] = NULL;
$arguments905['arguments'] = NULL;
$arguments905['extensionName'] = NULL;
$arguments905['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output904 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments905, $renderChildrenClosure906, $renderingContext)]);

$output904 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure908 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments907 = array();
$arguments907['identifier'] = NULL;
$arguments907['size'] = 'small';
$arguments907['overlay'] = NULL;
$arguments907['state'] = 'default';
$arguments907['alternativeMarkupIdentifier'] = NULL;
$arguments907['identifier'] = 'overlay-missing';

$output904 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments907, $renderChildrenClosure908, $renderingContext);

$output904 .= '
												</span>
											';
return $output904;
};
$arguments902 = array();

$output901 .= '';

$output901 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure910 = function() use ($renderingContext, $self) {
$output914 = '';

$output914 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure916 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments915 = array();
$arguments915['key'] = NULL;
$arguments915['id'] = NULL;
$arguments915['default'] = NULL;
$arguments915['htmlEscape'] = NULL;
$arguments915['arguments'] = NULL;
$arguments915['extensionName'] = NULL;
$arguments915['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output914 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments915, $renderChildrenClosure916, $renderingContext)]);

$output914 .= ' ';
$array917 = array (
);
$output914 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array917)]);

$output914 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure919 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments918 = array();
$arguments918['identifier'] = NULL;
$arguments918['size'] = 'small';
$arguments918['overlay'] = NULL;
$arguments918['state'] = 'default';
$arguments918['alternativeMarkupIdentifier'] = NULL;
$arguments918['identifier'] = 'overlay-missing';

$output914 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments918, $renderChildrenClosure919, $renderingContext);

$output914 .= '
												</span>
											';
return $output914;
};
$arguments909 = array();
$arguments909['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array911 = array();
$array912 = array (
);$array911['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array912);

$expression913 = function($context) {return ($context["node0"]);};
$arguments909['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression913(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array911)
					),
					$renderingContext
				);

$output901 .= '';

$output901 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure921 = function() use ($renderingContext, $self) {
$output922 = '';

$output922 .= '
												<span title="id=';
$array923 = array (
);
$output922 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array923)]);

$output922 .= '" data-toggle="tooltip" data-placement="right">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure925 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments924 = array();
$arguments924['identifier'] = NULL;
$arguments924['size'] = 'small';
$arguments924['overlay'] = NULL;
$arguments924['state'] = 'default';
$arguments924['alternativeMarkupIdentifier'] = NULL;
$arguments924['identifier'] = 'content-elements-mailform';

$output922 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments924, $renderChildrenClosure925, $renderingContext);

$output922 .= '
												</span>
											';
return $output922;
};
$arguments920 = array();
$arguments920['if'] = NULL;

$output901 .= '';

$output901 .= '
										';
return $output901;
};
$arguments879 = array();
$arguments879['then'] = NULL;
$arguments879['else'] = NULL;
$arguments879['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array898 = array();
$array899 = array (
);$array898['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array899);

$expression900 = function($context) {return ($context["node0"]);};
$arguments879['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression900(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array898)
					),
					$renderingContext
				);
$arguments879['__thenClosure'] = function() use ($renderingContext, $self) {
$output881 = '';

$output881 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure883 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments882 = array();
$arguments882['key'] = NULL;
$arguments882['id'] = NULL;
$arguments882['default'] = NULL;
$arguments882['htmlEscape'] = NULL;
$arguments882['arguments'] = NULL;
$arguments882['extensionName'] = NULL;
$arguments882['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output881 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments882, $renderChildrenClosure883, $renderingContext)]);

$output881 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure885 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments884 = array();
$arguments884['identifier'] = NULL;
$arguments884['size'] = 'small';
$arguments884['overlay'] = NULL;
$arguments884['state'] = 'default';
$arguments884['alternativeMarkupIdentifier'] = NULL;
$arguments884['identifier'] = 'overlay-missing';

$output881 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments884, $renderChildrenClosure885, $renderingContext);

$output881 .= '
												</span>
											';
return $output881;
};
$arguments879['__elseClosures'][] = function() use ($renderingContext, $self) {
$output886 = '';

$output886 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure888 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments887 = array();
$arguments887['key'] = NULL;
$arguments887['id'] = NULL;
$arguments887['default'] = NULL;
$arguments887['htmlEscape'] = NULL;
$arguments887['arguments'] = NULL;
$arguments887['extensionName'] = NULL;
$arguments887['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output886 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments887, $renderChildrenClosure888, $renderingContext)]);

$output886 .= ' ';
$array889 = array (
);
$output886 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array889)]);

$output886 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure891 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments890 = array();
$arguments890['identifier'] = NULL;
$arguments890['size'] = 'small';
$arguments890['overlay'] = NULL;
$arguments890['state'] = 'default';
$arguments890['alternativeMarkupIdentifier'] = NULL;
$arguments890['identifier'] = 'overlay-missing';

$output886 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments890, $renderChildrenClosure891, $renderingContext);

$output886 .= '
												</span>
											';
return $output886;
};
$arguments879['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Array
$array892 = array();
$array893 = array (
);$array892['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array893);

return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateStack($renderingContext, $array892);
};
$arguments879['__elseClosures'][] = function() use ($renderingContext, $self) {
$output894 = '';

$output894 .= '
												<span title="id=';
$array895 = array (
);
$output894 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array895)]);

$output894 .= '" data-toggle="tooltip" data-placement="right">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure897 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments896 = array();
$arguments896['identifier'] = NULL;
$arguments896['size'] = 'small';
$arguments896['overlay'] = NULL;
$arguments896['state'] = 'default';
$arguments896['alternativeMarkupIdentifier'] = NULL;
$arguments896['identifier'] = 'content-elements-mailform';

$output894 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments896, $renderChildrenClosure897, $renderingContext);

$output894 .= '
												</span>
											';
return $output894;
};

$output878 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments879, $renderChildrenClosure880, $renderingContext);

$output878 .= '
									</td>
									<td class="col-title col-responsive nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure927 = function() use ($renderingContext, $self) {
$output944 = '';

$output944 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure946 = function() use ($renderingContext, $self) {
$output947 = '';

$output947 .= '
													<div title="';
$array948 = array (
);
$output947 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array948)]);

$output947 .= '">';
$array949 = array (
);
$output947 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array949)]);

$output947 .= '</div>
												';
return $output947;
};
$arguments945 = array();

$output944 .= '';

$output944 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure951 = function() use ($renderingContext, $self) {
$output952 = '';

$output952 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure954 = function() use ($renderingContext, $self) {
$array960 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array960)]);
};
$arguments953 = array();
$arguments953['action'] = NULL;
$arguments953['arguments'] = array (
);
$arguments953['controller'] = NULL;
$arguments953['extensionName'] = NULL;
$arguments953['pluginName'] = NULL;
$arguments953['pageUid'] = NULL;
$arguments953['pageType'] = 0;
$arguments953['noCache'] = false;
$arguments953['noCacheHash'] = false;
$arguments953['section'] = '';
$arguments953['format'] = '';
$arguments953['linkAccessRestrictedPages'] = false;
$arguments953['additionalParams'] = array (
);
$arguments953['absolute'] = false;
$arguments953['addQueryString'] = false;
$arguments953['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments953['addQueryStringMethod'] = NULL;
$arguments953['additionalAttributes'] = NULL;
$arguments953['data'] = NULL;
$arguments953['class'] = NULL;
$arguments953['dir'] = NULL;
$arguments953['id'] = NULL;
$arguments953['lang'] = NULL;
$arguments953['style'] = NULL;
$arguments953['title'] = NULL;
$arguments953['accesskey'] = NULL;
$arguments953['tabindex'] = NULL;
$arguments953['onclick'] = NULL;
$arguments953['name'] = NULL;
$arguments953['rel'] = NULL;
$arguments953['rev'] = NULL;
$arguments953['target'] = NULL;
$arguments953['controller'] = 'FormEditor';
$arguments953['action'] = 'index';
// Rendering Array
$array955 = array();
$array956 = array (
);$array955['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array956);
$arguments953['arguments'] = $array955;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure958 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments957 = array();
$arguments957['key'] = NULL;
$arguments957['id'] = NULL;
$arguments957['default'] = NULL;
$arguments957['htmlEscape'] = NULL;
$arguments957['arguments'] = NULL;
$arguments957['extensionName'] = NULL;
$arguments957['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments953['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments957, $renderChildrenClosure958, $renderingContext);
// Rendering Array
$array959 = array();
$array959['toggle'] = 'tooltip';
$array959['placement'] = 'right';
$arguments953['data'] = $array959;

$output952 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments953, $renderChildrenClosure954, $renderingContext);

$output952 .= '
												';
return $output952;
};
$arguments950 = array();
$arguments950['if'] = NULL;

$output944 .= '';

$output944 .= '
										';
return $output944;
};
$arguments926 = array();
$arguments926['then'] = NULL;
$arguments926['else'] = NULL;
$arguments926['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array940 = array();
$array941 = array (
);$array940['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array941);
$array940['1'] = ' || ';
$array942 = array (
);$array940['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array942);

$expression943 = function($context) {return (($context["node0"]) || ($context["node2"]));};
$arguments926['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression943(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array940)
					),
					$renderingContext
				);
$arguments926['__thenClosure'] = function() use ($renderingContext, $self) {
$output928 = '';

$output928 .= '
													<div title="';
$array929 = array (
);
$output928 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array929)]);

$output928 .= '">';
$array930 = array (
);
$output928 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array930)]);

$output928 .= '</div>
												';
return $output928;
};
$arguments926['__elseClosures'][] = function() use ($renderingContext, $self) {
$output931 = '';

$output931 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure933 = function() use ($renderingContext, $self) {
$array939 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array939)]);
};
$arguments932 = array();
$arguments932['action'] = NULL;
$arguments932['arguments'] = array (
);
$arguments932['controller'] = NULL;
$arguments932['extensionName'] = NULL;
$arguments932['pluginName'] = NULL;
$arguments932['pageUid'] = NULL;
$arguments932['pageType'] = 0;
$arguments932['noCache'] = false;
$arguments932['noCacheHash'] = false;
$arguments932['section'] = '';
$arguments932['format'] = '';
$arguments932['linkAccessRestrictedPages'] = false;
$arguments932['additionalParams'] = array (
);
$arguments932['absolute'] = false;
$arguments932['addQueryString'] = false;
$arguments932['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments932['addQueryStringMethod'] = NULL;
$arguments932['additionalAttributes'] = NULL;
$arguments932['data'] = NULL;
$arguments932['class'] = NULL;
$arguments932['dir'] = NULL;
$arguments932['id'] = NULL;
$arguments932['lang'] = NULL;
$arguments932['style'] = NULL;
$arguments932['title'] = NULL;
$arguments932['accesskey'] = NULL;
$arguments932['tabindex'] = NULL;
$arguments932['onclick'] = NULL;
$arguments932['name'] = NULL;
$arguments932['rel'] = NULL;
$arguments932['rev'] = NULL;
$arguments932['target'] = NULL;
$arguments932['controller'] = 'FormEditor';
$arguments932['action'] = 'index';
// Rendering Array
$array934 = array();
$array935 = array (
);$array934['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array935);
$arguments932['arguments'] = $array934;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure937 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments936 = array();
$arguments936['key'] = NULL;
$arguments936['id'] = NULL;
$arguments936['default'] = NULL;
$arguments936['htmlEscape'] = NULL;
$arguments936['arguments'] = NULL;
$arguments936['extensionName'] = NULL;
$arguments936['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments932['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments936, $renderChildrenClosure937, $renderingContext);
// Rendering Array
$array938 = array();
$array938['toggle'] = 'tooltip';
$array938['placement'] = 'right';
$arguments932['data'] = $array938;

$output931 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments932, $renderChildrenClosure933, $renderingContext);

$output931 .= '
												';
return $output931;
};

$output878 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments926, $renderChildrenClosure927, $renderingContext);

$output878 .= '
									</td>
									<td class="col-control nowrap">
										<div class="btn-group" role="group">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure962 = function() use ($renderingContext, $self) {
$output981 = '';

$output981 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure983 = function() use ($renderingContext, $self) {
$output984 = '';

$output984 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure986 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments985 = array();
$arguments985['key'] = NULL;
$arguments985['id'] = NULL;
$arguments985['default'] = NULL;
$arguments985['htmlEscape'] = NULL;
$arguments985['arguments'] = NULL;
$arguments985['extensionName'] = NULL;
$arguments985['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output984 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments985, $renderChildrenClosure986, $renderingContext)]);

$output984 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure988 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments987 = array();
$arguments987['identifier'] = NULL;
$arguments987['size'] = 'small';
$arguments987['overlay'] = NULL;
$arguments987['state'] = 'default';
$arguments987['alternativeMarkupIdentifier'] = NULL;
$arguments987['identifier'] = 'actions-open';

$output984 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments987, $renderChildrenClosure988, $renderingContext);

$output984 .= '</button>
												';
return $output984;
};
$arguments982 = array();

$output981 .= '';

$output981 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure990 = function() use ($renderingContext, $self) {
$output991 = '';

$output991 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure993 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure999 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments998 = array();
$arguments998['identifier'] = NULL;
$arguments998['size'] = 'small';
$arguments998['overlay'] = NULL;
$arguments998['state'] = 'default';
$arguments998['alternativeMarkupIdentifier'] = NULL;
$arguments998['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments998, $renderChildrenClosure999, $renderingContext);
};
$arguments992 = array();
$arguments992['action'] = NULL;
$arguments992['arguments'] = array (
);
$arguments992['controller'] = NULL;
$arguments992['extensionName'] = NULL;
$arguments992['pluginName'] = NULL;
$arguments992['pageUid'] = NULL;
$arguments992['pageType'] = 0;
$arguments992['noCache'] = false;
$arguments992['noCacheHash'] = false;
$arguments992['section'] = '';
$arguments992['format'] = '';
$arguments992['linkAccessRestrictedPages'] = false;
$arguments992['additionalParams'] = array (
);
$arguments992['absolute'] = false;
$arguments992['addQueryString'] = false;
$arguments992['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments992['addQueryStringMethod'] = NULL;
$arguments992['additionalAttributes'] = NULL;
$arguments992['data'] = NULL;
$arguments992['class'] = NULL;
$arguments992['dir'] = NULL;
$arguments992['id'] = NULL;
$arguments992['lang'] = NULL;
$arguments992['style'] = NULL;
$arguments992['title'] = NULL;
$arguments992['accesskey'] = NULL;
$arguments992['tabindex'] = NULL;
$arguments992['onclick'] = NULL;
$arguments992['name'] = NULL;
$arguments992['rel'] = NULL;
$arguments992['rev'] = NULL;
$arguments992['target'] = NULL;
$arguments992['controller'] = 'FormEditor';
$arguments992['action'] = 'index';
// Rendering Array
$array994 = array();
$array995 = array (
);$array994['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array995);
$arguments992['arguments'] = $array994;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure997 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments996 = array();
$arguments996['key'] = NULL;
$arguments996['id'] = NULL;
$arguments996['default'] = NULL;
$arguments996['htmlEscape'] = NULL;
$arguments996['arguments'] = NULL;
$arguments996['extensionName'] = NULL;
$arguments996['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments992['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments996, $renderChildrenClosure997, $renderingContext);
$arguments992['class'] = 'btn btn-default form-record-open';

$output991 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments992, $renderChildrenClosure993, $renderingContext);

$output991 .= '
												';
return $output991;
};
$arguments989 = array();
$arguments989['if'] = NULL;

$output981 .= '';

$output981 .= '
											';
return $output981;
};
$arguments961 = array();
$arguments961['then'] = NULL;
$arguments961['else'] = NULL;
$arguments961['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array977 = array();
$array978 = array (
);$array977['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array978);
$array977['1'] = ' || ';
$array979 = array (
);$array977['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array979);

$expression980 = function($context) {return (($context["node0"]) || ($context["node2"]));};
$arguments961['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression980(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array977)
					),
					$renderingContext
				);
$arguments961['__thenClosure'] = function() use ($renderingContext, $self) {
$output963 = '';

$output963 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure965 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments964 = array();
$arguments964['key'] = NULL;
$arguments964['id'] = NULL;
$arguments964['default'] = NULL;
$arguments964['htmlEscape'] = NULL;
$arguments964['arguments'] = NULL;
$arguments964['extensionName'] = NULL;
$arguments964['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output963 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments964, $renderChildrenClosure965, $renderingContext)]);

$output963 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure967 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments966 = array();
$arguments966['identifier'] = NULL;
$arguments966['size'] = 'small';
$arguments966['overlay'] = NULL;
$arguments966['state'] = 'default';
$arguments966['alternativeMarkupIdentifier'] = NULL;
$arguments966['identifier'] = 'actions-open';

$output963 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments966, $renderChildrenClosure967, $renderingContext);

$output963 .= '</button>
												';
return $output963;
};
$arguments961['__elseClosures'][] = function() use ($renderingContext, $self) {
$output968 = '';

$output968 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure970 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure976 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments975 = array();
$arguments975['identifier'] = NULL;
$arguments975['size'] = 'small';
$arguments975['overlay'] = NULL;
$arguments975['state'] = 'default';
$arguments975['alternativeMarkupIdentifier'] = NULL;
$arguments975['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments975, $renderChildrenClosure976, $renderingContext);
};
$arguments969 = array();
$arguments969['action'] = NULL;
$arguments969['arguments'] = array (
);
$arguments969['controller'] = NULL;
$arguments969['extensionName'] = NULL;
$arguments969['pluginName'] = NULL;
$arguments969['pageUid'] = NULL;
$arguments969['pageType'] = 0;
$arguments969['noCache'] = false;
$arguments969['noCacheHash'] = false;
$arguments969['section'] = '';
$arguments969['format'] = '';
$arguments969['linkAccessRestrictedPages'] = false;
$arguments969['additionalParams'] = array (
);
$arguments969['absolute'] = false;
$arguments969['addQueryString'] = false;
$arguments969['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments969['addQueryStringMethod'] = NULL;
$arguments969['additionalAttributes'] = NULL;
$arguments969['data'] = NULL;
$arguments969['class'] = NULL;
$arguments969['dir'] = NULL;
$arguments969['id'] = NULL;
$arguments969['lang'] = NULL;
$arguments969['style'] = NULL;
$arguments969['title'] = NULL;
$arguments969['accesskey'] = NULL;
$arguments969['tabindex'] = NULL;
$arguments969['onclick'] = NULL;
$arguments969['name'] = NULL;
$arguments969['rel'] = NULL;
$arguments969['rev'] = NULL;
$arguments969['target'] = NULL;
$arguments969['controller'] = 'FormEditor';
$arguments969['action'] = 'index';
// Rendering Array
$array971 = array();
$array972 = array (
);$array971['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array972);
$arguments969['arguments'] = $array971;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure974 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments973 = array();
$arguments973['key'] = NULL;
$arguments973['id'] = NULL;
$arguments973['default'] = NULL;
$arguments973['htmlEscape'] = NULL;
$arguments973['arguments'] = NULL;
$arguments973['extensionName'] = NULL;
$arguments973['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments969['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments973, $renderChildrenClosure974, $renderingContext);
$arguments969['class'] = 'btn btn-default form-record-open';

$output968 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments969, $renderChildrenClosure970, $renderingContext);

$output968 .= '
												';
return $output968;
};

$output878 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments961, $renderChildrenClosure962, $renderingContext);

$output878 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1001 = function() use ($renderingContext, $self) {
$output1053 = '';

$output1053 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1055 = function() use ($renderingContext, $self) {
$output1056 = '';

$output1056 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1058 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1057 = array();
$arguments1057['key'] = NULL;
$arguments1057['id'] = NULL;
$arguments1057['default'] = NULL;
$arguments1057['htmlEscape'] = NULL;
$arguments1057['arguments'] = NULL;
$arguments1057['extensionName'] = NULL;
$arguments1057['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output1056 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1057, $renderChildrenClosure1058, $renderingContext)]);

$output1056 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1060 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1059 = array();
$arguments1059['identifier'] = NULL;
$arguments1059['size'] = 'small';
$arguments1059['overlay'] = NULL;
$arguments1059['state'] = 'default';
$arguments1059['alternativeMarkupIdentifier'] = NULL;
$arguments1059['identifier'] = 't3-form-icon-duplicate';

$output1056 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1059, $renderChildrenClosure1060, $renderingContext);

$output1056 .= '</button>
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1062 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1061 = array();
$arguments1061['key'] = NULL;
$arguments1061['id'] = NULL;
$arguments1061['default'] = NULL;
$arguments1061['htmlEscape'] = NULL;
$arguments1061['arguments'] = NULL;
$arguments1061['extensionName'] = NULL;
$arguments1061['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output1056 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1061, $renderChildrenClosure1062, $renderingContext)]);

$output1056 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1064 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1063 = array();
$arguments1063['identifier'] = NULL;
$arguments1063['size'] = 'small';
$arguments1063['overlay'] = NULL;
$arguments1063['state'] = 'default';
$arguments1063['alternativeMarkupIdentifier'] = NULL;
$arguments1063['identifier'] = 'actions-edit-delete';

$output1056 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1063, $renderChildrenClosure1064, $renderingContext);

$output1056 .= '</button>
												';
return $output1056;
};
$arguments1054 = array();

$output1053 .= '';

$output1053 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1066 = function() use ($renderingContext, $self) {
$output1067 = '';

$output1067 .= '
													<a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array1068 = array (
);
$output1067 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1068)]);

$output1067 .= '" data-form-name="';
$array1069 = array (
);
$output1067 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array1069)]);

$output1067 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1071 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1070 = array();
$arguments1070['key'] = NULL;
$arguments1070['id'] = NULL;
$arguments1070['default'] = NULL;
$arguments1070['htmlEscape'] = NULL;
$arguments1070['arguments'] = NULL;
$arguments1070['extensionName'] = NULL;
$arguments1070['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output1067 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1070, $renderChildrenClosure1071, $renderingContext)]);

$output1067 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1073 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1072 = array();
$arguments1072['identifier'] = NULL;
$arguments1072['size'] = 'small';
$arguments1072['overlay'] = NULL;
$arguments1072['state'] = 'default';
$arguments1072['alternativeMarkupIdentifier'] = NULL;
$arguments1072['identifier'] = 't3-form-icon-duplicate';

$output1067 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1072, $renderChildrenClosure1073, $renderingContext);

$output1067 .= '</a>
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1075 = function() use ($renderingContext, $self) {
$output1090 = '';

$output1090 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1092 = function() use ($renderingContext, $self) {
$output1093 = '';

$output1093 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array1094 = array (
);
$output1093 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1094)]);

$output1093 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1096 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1095 = array();
$arguments1095['key'] = NULL;
$arguments1095['id'] = NULL;
$arguments1095['default'] = NULL;
$arguments1095['htmlEscape'] = NULL;
$arguments1095['arguments'] = NULL;
$arguments1095['extensionName'] = NULL;
$arguments1095['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output1093 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1095, $renderChildrenClosure1096, $renderingContext)]);

$output1093 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1098 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1097 = array();
$arguments1097['identifier'] = NULL;
$arguments1097['size'] = 'small';
$arguments1097['overlay'] = NULL;
$arguments1097['state'] = 'default';
$arguments1097['alternativeMarkupIdentifier'] = NULL;
$arguments1097['identifier'] = 'actions-edit-delete';

$output1093 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1097, $renderChildrenClosure1098, $renderingContext);

$output1093 .= '</a>
														';
return $output1093;
};
$arguments1091 = array();

$output1090 .= '';

$output1090 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1100 = function() use ($renderingContext, $self) {
$output1101 = '';

$output1101 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1102 = array();
$arguments1102['key'] = NULL;
$arguments1102['id'] = NULL;
$arguments1102['default'] = NULL;
$arguments1102['htmlEscape'] = NULL;
$arguments1102['arguments'] = NULL;
$arguments1102['extensionName'] = NULL;
$arguments1102['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output1101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1102, $renderChildrenClosure1103, $renderingContext)]);

$output1101 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1104 = array();
$arguments1104['identifier'] = NULL;
$arguments1104['size'] = 'small';
$arguments1104['overlay'] = NULL;
$arguments1104['state'] = 'default';
$arguments1104['alternativeMarkupIdentifier'] = NULL;
$arguments1104['identifier'] = 'actions-edit-delete';

$output1101 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1104, $renderChildrenClosure1105, $renderingContext);

$output1101 .= '</button>
														';
return $output1101;
};
$arguments1099 = array();
$arguments1099['if'] = NULL;

$output1090 .= '';

$output1090 .= '
													';
return $output1090;
};
$arguments1074 = array();
$arguments1074['then'] = NULL;
$arguments1074['else'] = NULL;
$arguments1074['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1087 = array();
$array1088 = array (
);$array1087['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array1088);

$expression1089 = function($context) {return ($context["node0"]);};
$arguments1074['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1089(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1087)
					),
					$renderingContext
				);
$arguments1074['__thenClosure'] = function() use ($renderingContext, $self) {
$output1076 = '';

$output1076 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array1077 = array (
);
$output1076 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1077)]);

$output1076 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1079 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1078 = array();
$arguments1078['key'] = NULL;
$arguments1078['id'] = NULL;
$arguments1078['default'] = NULL;
$arguments1078['htmlEscape'] = NULL;
$arguments1078['arguments'] = NULL;
$arguments1078['extensionName'] = NULL;
$arguments1078['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output1076 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1078, $renderChildrenClosure1079, $renderingContext)]);

$output1076 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1081 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1080 = array();
$arguments1080['identifier'] = NULL;
$arguments1080['size'] = 'small';
$arguments1080['overlay'] = NULL;
$arguments1080['state'] = 'default';
$arguments1080['alternativeMarkupIdentifier'] = NULL;
$arguments1080['identifier'] = 'actions-edit-delete';

$output1076 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1080, $renderChildrenClosure1081, $renderingContext);

$output1076 .= '</a>
														';
return $output1076;
};
$arguments1074['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1082 = '';

$output1082 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1084 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1083 = array();
$arguments1083['key'] = NULL;
$arguments1083['id'] = NULL;
$arguments1083['default'] = NULL;
$arguments1083['htmlEscape'] = NULL;
$arguments1083['arguments'] = NULL;
$arguments1083['extensionName'] = NULL;
$arguments1083['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output1082 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1083, $renderChildrenClosure1084, $renderingContext)]);

$output1082 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1086 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1085 = array();
$arguments1085['identifier'] = NULL;
$arguments1085['size'] = 'small';
$arguments1085['overlay'] = NULL;
$arguments1085['state'] = 'default';
$arguments1085['alternativeMarkupIdentifier'] = NULL;
$arguments1085['identifier'] = 'actions-edit-delete';

$output1082 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1085, $renderChildrenClosure1086, $renderingContext);

$output1082 .= '</button>
														';
return $output1082;
};

$output1067 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1074, $renderChildrenClosure1075, $renderingContext);

$output1067 .= '
												';
return $output1067;
};
$arguments1065 = array();
$arguments1065['if'] = NULL;

$output1053 .= '';

$output1053 .= '
											';
return $output1053;
};
$arguments1000 = array();
$arguments1000['then'] = NULL;
$arguments1000['else'] = NULL;
$arguments1000['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1050 = array();
$array1051 = array (
);$array1050['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array1051);

$expression1052 = function($context) {return ($context["node0"]);};
$arguments1000['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1052(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1050)
					),
					$renderingContext
				);
$arguments1000['__thenClosure'] = function() use ($renderingContext, $self) {
$output1002 = '';

$output1002 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1004 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1003 = array();
$arguments1003['key'] = NULL;
$arguments1003['id'] = NULL;
$arguments1003['default'] = NULL;
$arguments1003['htmlEscape'] = NULL;
$arguments1003['arguments'] = NULL;
$arguments1003['extensionName'] = NULL;
$arguments1003['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output1002 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1003, $renderChildrenClosure1004, $renderingContext)]);

$output1002 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1006 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1005 = array();
$arguments1005['identifier'] = NULL;
$arguments1005['size'] = 'small';
$arguments1005['overlay'] = NULL;
$arguments1005['state'] = 'default';
$arguments1005['alternativeMarkupIdentifier'] = NULL;
$arguments1005['identifier'] = 't3-form-icon-duplicate';

$output1002 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1005, $renderChildrenClosure1006, $renderingContext);

$output1002 .= '</button>
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1008 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1007 = array();
$arguments1007['key'] = NULL;
$arguments1007['id'] = NULL;
$arguments1007['default'] = NULL;
$arguments1007['htmlEscape'] = NULL;
$arguments1007['arguments'] = NULL;
$arguments1007['extensionName'] = NULL;
$arguments1007['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output1002 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1007, $renderChildrenClosure1008, $renderingContext)]);

$output1002 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1010 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1009 = array();
$arguments1009['identifier'] = NULL;
$arguments1009['size'] = 'small';
$arguments1009['overlay'] = NULL;
$arguments1009['state'] = 'default';
$arguments1009['alternativeMarkupIdentifier'] = NULL;
$arguments1009['identifier'] = 'actions-edit-delete';

$output1002 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1009, $renderChildrenClosure1010, $renderingContext);

$output1002 .= '</button>
												';
return $output1002;
};
$arguments1000['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1011 = '';

$output1011 .= '
													<a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array1012 = array (
);
$output1011 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1012)]);

$output1011 .= '" data-form-name="';
$array1013 = array (
);
$output1011 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array1013)]);

$output1011 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1015 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1014 = array();
$arguments1014['key'] = NULL;
$arguments1014['id'] = NULL;
$arguments1014['default'] = NULL;
$arguments1014['htmlEscape'] = NULL;
$arguments1014['arguments'] = NULL;
$arguments1014['extensionName'] = NULL;
$arguments1014['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output1011 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1014, $renderChildrenClosure1015, $renderingContext)]);

$output1011 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1017 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1016 = array();
$arguments1016['identifier'] = NULL;
$arguments1016['size'] = 'small';
$arguments1016['overlay'] = NULL;
$arguments1016['state'] = 'default';
$arguments1016['alternativeMarkupIdentifier'] = NULL;
$arguments1016['identifier'] = 't3-form-icon-duplicate';

$output1011 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1016, $renderChildrenClosure1017, $renderingContext);

$output1011 .= '</a>
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1019 = function() use ($renderingContext, $self) {
$output1034 = '';

$output1034 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1036 = function() use ($renderingContext, $self) {
$output1037 = '';

$output1037 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array1038 = array (
);
$output1037 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1038)]);

$output1037 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1040 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1039 = array();
$arguments1039['key'] = NULL;
$arguments1039['id'] = NULL;
$arguments1039['default'] = NULL;
$arguments1039['htmlEscape'] = NULL;
$arguments1039['arguments'] = NULL;
$arguments1039['extensionName'] = NULL;
$arguments1039['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output1037 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1039, $renderChildrenClosure1040, $renderingContext)]);

$output1037 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1042 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1041 = array();
$arguments1041['identifier'] = NULL;
$arguments1041['size'] = 'small';
$arguments1041['overlay'] = NULL;
$arguments1041['state'] = 'default';
$arguments1041['alternativeMarkupIdentifier'] = NULL;
$arguments1041['identifier'] = 'actions-edit-delete';

$output1037 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1041, $renderChildrenClosure1042, $renderingContext);

$output1037 .= '</a>
														';
return $output1037;
};
$arguments1035 = array();

$output1034 .= '';

$output1034 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1044 = function() use ($renderingContext, $self) {
$output1045 = '';

$output1045 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1047 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1046 = array();
$arguments1046['key'] = NULL;
$arguments1046['id'] = NULL;
$arguments1046['default'] = NULL;
$arguments1046['htmlEscape'] = NULL;
$arguments1046['arguments'] = NULL;
$arguments1046['extensionName'] = NULL;
$arguments1046['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output1045 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1046, $renderChildrenClosure1047, $renderingContext)]);

$output1045 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1049 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1048 = array();
$arguments1048['identifier'] = NULL;
$arguments1048['size'] = 'small';
$arguments1048['overlay'] = NULL;
$arguments1048['state'] = 'default';
$arguments1048['alternativeMarkupIdentifier'] = NULL;
$arguments1048['identifier'] = 'actions-edit-delete';

$output1045 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1048, $renderChildrenClosure1049, $renderingContext);

$output1045 .= '</button>
														';
return $output1045;
};
$arguments1043 = array();
$arguments1043['if'] = NULL;

$output1034 .= '';

$output1034 .= '
													';
return $output1034;
};
$arguments1018 = array();
$arguments1018['then'] = NULL;
$arguments1018['else'] = NULL;
$arguments1018['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1031 = array();
$array1032 = array (
);$array1031['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array1032);

$expression1033 = function($context) {return ($context["node0"]);};
$arguments1018['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1033(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1031)
					),
					$renderingContext
				);
$arguments1018['__thenClosure'] = function() use ($renderingContext, $self) {
$output1020 = '';

$output1020 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array1021 = array (
);
$output1020 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1021)]);

$output1020 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1023 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1022 = array();
$arguments1022['key'] = NULL;
$arguments1022['id'] = NULL;
$arguments1022['default'] = NULL;
$arguments1022['htmlEscape'] = NULL;
$arguments1022['arguments'] = NULL;
$arguments1022['extensionName'] = NULL;
$arguments1022['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output1020 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1022, $renderChildrenClosure1023, $renderingContext)]);

$output1020 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1025 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1024 = array();
$arguments1024['identifier'] = NULL;
$arguments1024['size'] = 'small';
$arguments1024['overlay'] = NULL;
$arguments1024['state'] = 'default';
$arguments1024['alternativeMarkupIdentifier'] = NULL;
$arguments1024['identifier'] = 'actions-edit-delete';

$output1020 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1024, $renderChildrenClosure1025, $renderingContext);

$output1020 .= '</a>
														';
return $output1020;
};
$arguments1018['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1026 = '';

$output1026 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1028 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1027 = array();
$arguments1027['key'] = NULL;
$arguments1027['id'] = NULL;
$arguments1027['default'] = NULL;
$arguments1027['htmlEscape'] = NULL;
$arguments1027['arguments'] = NULL;
$arguments1027['extensionName'] = NULL;
$arguments1027['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output1026 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1027, $renderChildrenClosure1028, $renderingContext)]);

$output1026 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1030 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1029 = array();
$arguments1029['identifier'] = NULL;
$arguments1029['size'] = 'small';
$arguments1029['overlay'] = NULL;
$arguments1029['state'] = 'default';
$arguments1029['alternativeMarkupIdentifier'] = NULL;
$arguments1029['identifier'] = 'actions-edit-delete';

$output1026 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1029, $renderChildrenClosure1030, $renderingContext);

$output1026 .= '</button>
														';
return $output1026;
};

$output1011 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1018, $renderChildrenClosure1019, $renderingContext);

$output1011 .= '
												';
return $output1011;
};

$output878 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1000, $renderChildrenClosure1001, $renderingContext);

$output878 .= '
										</div>
									</td>
									<td class="nowrap">';
$array1106 = array (
);
$output878 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1106)]);

$output878 .= '</td>
									<td class="nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1108 = function() use ($renderingContext, $self) {
$output1118 = '';

$output1118 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1120 = function() use ($renderingContext, $self) {
$output1121 = '';

$output1121 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array1122 = array (
);
$output1121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1122)]);

$output1121 .= '" data-form-name="';
$array1123 = array (
);
$output1121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array1123)]);

$output1121 .= '">';
$array1124 = array (
);
$output1121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array1124)]);

$output1121 .= '</a>
											';
return $output1121;
};
$arguments1119 = array();

$output1118 .= '';

$output1118 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1126 = function() use ($renderingContext, $self) {
$output1127 = '';

$output1127 .= '
												';
$array1128 = array (
);
$output1127 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array1128)]);

$output1127 .= '
											';
return $output1127;
};
$arguments1125 = array();
$arguments1125['if'] = NULL;

$output1118 .= '';

$output1118 .= '
										';
return $output1118;
};
$arguments1107 = array();
$arguments1107['then'] = NULL;
$arguments1107['else'] = NULL;
$arguments1107['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1115 = array();
$array1116 = array (
);$array1115['0'] = $renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array1116);

$expression1117 = function($context) {return ($context["node0"]);};
$arguments1107['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1117(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1115)
					),
					$renderingContext
				);
$arguments1107['__thenClosure'] = function() use ($renderingContext, $self) {
$output1109 = '';

$output1109 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array1110 = array (
);
$output1109 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array1110)]);

$output1109 .= '" data-form-name="';
$array1111 = array (
);
$output1109 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array1111)]);

$output1109 .= '">';
$array1112 = array (
);
$output1109 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array1112)]);

$output1109 .= '</a>
											';
return $output1109;
};
$arguments1107['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1113 = '';

$output1113 .= '
												';
$array1114 = array (
);
$output1113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array1114)]);

$output1113 .= '
											';
return $output1113;
};

$output878 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1107, $renderChildrenClosure1108, $renderingContext);

$output878 .= '
									</td>
								</tr>
							';
return $output878;
};
$arguments875 = array();
$arguments875['each'] = NULL;
$arguments875['as'] = NULL;
$arguments875['key'] = NULL;
$arguments875['reverse'] = false;
$arguments875['iteration'] = NULL;
$array877 = array (
);$arguments875['each'] = $renderingContext->getVariableProvider()->getByPath('forms', $array877);
$arguments875['as'] = 'form';

$output864 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments875, $renderChildrenClosure876, $renderingContext);

$output864 .= '
						</tbody>
					</table>
				</div>
			</div>
		</div>
	';
return $output864;
};
$arguments862 = array();

$output861 .= '';

$output861 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1130 = function() use ($renderingContext, $self) {
$output1131 = '';

$output1131 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure1133 = function() use ($renderingContext, $self) {
$output1136 = '';

$output1136 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1137 = array();
$arguments1137['key'] = NULL;
$arguments1137['id'] = NULL;
$arguments1137['default'] = NULL;
$arguments1137['htmlEscape'] = NULL;
$arguments1137['arguments'] = NULL;
$arguments1137['extensionName'] = NULL;
$arguments1137['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.no_forms';

$output1136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1137, $renderChildrenClosure1138, $renderingContext)]);

$output1136 .= '</p>
			<a class="btn btn-primary" data-identifier="newForm" href="#">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1139 = array();
$arguments1139['key'] = NULL;
$arguments1139['id'] = NULL;
$arguments1139['default'] = NULL;
$arguments1139['htmlEscape'] = NULL;
$arguments1139['arguments'] = NULL;
$arguments1139['extensionName'] = NULL;
$arguments1139['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form';

$output1136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1139, $renderChildrenClosure1140, $renderingContext)]);

$output1136 .= '</a>
		';
return $output1136;
};
$arguments1132 = array();
$arguments1132['message'] = NULL;
$arguments1132['title'] = NULL;
$arguments1132['state'] = -2;
$arguments1132['iconName'] = NULL;
$arguments1132['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1134 = array();
$arguments1134['key'] = NULL;
$arguments1134['id'] = NULL;
$arguments1134['default'] = NULL;
$arguments1134['htmlEscape'] = NULL;
$arguments1134['arguments'] = NULL;
$arguments1134['extensionName'] = NULL;
$arguments1134['key'] = 'formManager.no_forms';
$arguments1134['extensionName'] = 'form';
$arguments1132['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1134, $renderChildrenClosure1135, $renderingContext);
$arguments1132['state'] = -1;
$renderChildrenClosure1133 = $arguments1132['message'] ? function() use ($arguments1132) { return $arguments1132['message']; } : $renderChildrenClosure1133;
$output1131 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments1132, $renderChildrenClosure1133, $renderingContext);

$output1131 .= '
	';
return $output1131;
};
$arguments1129 = array();
$arguments1129['if'] = NULL;

$output861 .= '';

$output861 .= '
';
return $output861;
};
$arguments581 = array();
$arguments581['then'] = NULL;
$arguments581['else'] = NULL;
$arguments581['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array858 = array();
$array859 = array (
);$array858['0'] = $renderingContext->getVariableProvider()->getByPath('forms', $array859);

$expression860 = function($context) {return ($context["node0"]);};
$arguments581['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression860(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array858)
					),
					$renderingContext
				);
$arguments581['__thenClosure'] = function() use ($renderingContext, $self) {
$output583 = '';

$output583 .= '
			<div class="panel panel-space panel-default recordlist">
				<div class="panel-heading">
					<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments584 = array();
$arguments584['key'] = NULL;
$arguments584['id'] = NULL;
$arguments584['default'] = NULL;
$arguments584['htmlEscape'] = NULL;
$arguments584['arguments'] = NULL;
$arguments584['extensionName'] = NULL;
$arguments584['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_existing_forms';

$output583 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments584, $renderChildrenClosure585, $renderingContext)]);

$output583 .= '</span>
				</div>
				<div class="collapse in">
					<div class="table-fit">
						<table id="forms" class="table table-striped table-hover">
							<thead>
								<tr>
									<th class="col-icon nowrap"><a class="btn btn-default" data-identifier="newForm" href="#">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure587 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments586 = array();
$arguments586['identifier'] = NULL;
$arguments586['size'] = 'small';
$arguments586['overlay'] = NULL;
$arguments586['state'] = 'default';
$arguments586['alternativeMarkupIdentifier'] = NULL;
$arguments586['identifier'] = 'actions-add';

$output583 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments586, $renderChildrenClosure587, $renderingContext);

$output583 .= '</a></th>
									<th class="col-title col-responsive nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure589 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments588 = array();
$arguments588['key'] = NULL;
$arguments588['id'] = NULL;
$arguments588['default'] = NULL;
$arguments588['htmlEscape'] = NULL;
$arguments588['arguments'] = NULL;
$arguments588['extensionName'] = NULL;
$arguments588['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.form_name';

$output583 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments588, $renderChildrenClosure589, $renderingContext)]);

$output583 .= '</th>
									<th class="col-control nowrap"></th>
									<th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure591 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments590 = array();
$arguments590['key'] = NULL;
$arguments590['id'] = NULL;
$arguments590['default'] = NULL;
$arguments590['htmlEscape'] = NULL;
$arguments590['arguments'] = NULL;
$arguments590['extensionName'] = NULL;
$arguments590['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.location';

$output583 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments590, $renderChildrenClosure591, $renderingContext)]);

$output583 .= '</th>
									<th class="nowrap">';
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
$arguments592['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.references';

$output583 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext)]);

$output583 .= '</th>
								</tr>
							</thead>
							<tbody>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure595 = function() use ($renderingContext, $self) {
$output597 = '';

$output597 .= '
								<tr>
									<td class="col-icon nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure599 = function() use ($renderingContext, $self) {
$output620 = '';

$output620 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure622 = function() use ($renderingContext, $self) {
$output623 = '';

$output623 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure625 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments624 = array();
$arguments624['key'] = NULL;
$arguments624['id'] = NULL;
$arguments624['default'] = NULL;
$arguments624['htmlEscape'] = NULL;
$arguments624['arguments'] = NULL;
$arguments624['extensionName'] = NULL;
$arguments624['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output623 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments624, $renderChildrenClosure625, $renderingContext)]);

$output623 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure627 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments626 = array();
$arguments626['identifier'] = NULL;
$arguments626['size'] = 'small';
$arguments626['overlay'] = NULL;
$arguments626['state'] = 'default';
$arguments626['alternativeMarkupIdentifier'] = NULL;
$arguments626['identifier'] = 'overlay-missing';

$output623 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments626, $renderChildrenClosure627, $renderingContext);

$output623 .= '
												</span>
											';
return $output623;
};
$arguments621 = array();

$output620 .= '';

$output620 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure629 = function() use ($renderingContext, $self) {
$output633 = '';

$output633 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure635 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments634 = array();
$arguments634['key'] = NULL;
$arguments634['id'] = NULL;
$arguments634['default'] = NULL;
$arguments634['htmlEscape'] = NULL;
$arguments634['arguments'] = NULL;
$arguments634['extensionName'] = NULL;
$arguments634['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output633 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments634, $renderChildrenClosure635, $renderingContext)]);

$output633 .= ' ';
$array636 = array (
);
$output633 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array636)]);

$output633 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure638 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments637 = array();
$arguments637['identifier'] = NULL;
$arguments637['size'] = 'small';
$arguments637['overlay'] = NULL;
$arguments637['state'] = 'default';
$arguments637['alternativeMarkupIdentifier'] = NULL;
$arguments637['identifier'] = 'overlay-missing';

$output633 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments637, $renderChildrenClosure638, $renderingContext);

$output633 .= '
												</span>
											';
return $output633;
};
$arguments628 = array();
$arguments628['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array630 = array();
$array631 = array (
);$array630['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array631);

$expression632 = function($context) {return ($context["node0"]);};
$arguments628['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression632(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array630)
					),
					$renderingContext
				);

$output620 .= '';

$output620 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure640 = function() use ($renderingContext, $self) {
$output641 = '';

$output641 .= '
												<span title="id=';
$array642 = array (
);
$output641 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array642)]);

$output641 .= '" data-toggle="tooltip" data-placement="right">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure644 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments643 = array();
$arguments643['identifier'] = NULL;
$arguments643['size'] = 'small';
$arguments643['overlay'] = NULL;
$arguments643['state'] = 'default';
$arguments643['alternativeMarkupIdentifier'] = NULL;
$arguments643['identifier'] = 'content-elements-mailform';

$output641 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments643, $renderChildrenClosure644, $renderingContext);

$output641 .= '
												</span>
											';
return $output641;
};
$arguments639 = array();
$arguments639['if'] = NULL;

$output620 .= '';

$output620 .= '
										';
return $output620;
};
$arguments598 = array();
$arguments598['then'] = NULL;
$arguments598['else'] = NULL;
$arguments598['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array617 = array();
$array618 = array (
);$array617['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array618);

$expression619 = function($context) {return ($context["node0"]);};
$arguments598['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression619(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array617)
					),
					$renderingContext
				);
$arguments598['__thenClosure'] = function() use ($renderingContext, $self) {
$output600 = '';

$output600 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure602 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments601 = array();
$arguments601['key'] = NULL;
$arguments601['id'] = NULL;
$arguments601['default'] = NULL;
$arguments601['htmlEscape'] = NULL;
$arguments601['arguments'] = NULL;
$arguments601['extensionName'] = NULL;
$arguments601['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid';

$output600 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments601, $renderChildrenClosure602, $renderingContext)]);

$output600 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure604 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments603 = array();
$arguments603['identifier'] = NULL;
$arguments603['size'] = 'small';
$arguments603['overlay'] = NULL;
$arguments603['state'] = 'default';
$arguments603['alternativeMarkupIdentifier'] = NULL;
$arguments603['identifier'] = 'overlay-missing';

$output600 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments603, $renderChildrenClosure604, $renderingContext);

$output600 .= '
												</span>
											';
return $output600;
};
$arguments598['__elseClosures'][] = function() use ($renderingContext, $self) {
$output605 = '';

$output605 .= '
												<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure607 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments606 = array();
$arguments606['key'] = NULL;
$arguments606['id'] = NULL;
$arguments606['default'] = NULL;
$arguments606['htmlEscape'] = NULL;
$arguments606['arguments'] = NULL;
$arguments606['extensionName'] = NULL;
$arguments606['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier';

$output605 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments606, $renderChildrenClosure607, $renderingContext)]);

$output605 .= ' ';
$array608 = array (
);
$output605 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array608)]);

$output605 .= '" data-toggle="tooltip" data-placement="top">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure610 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments609 = array();
$arguments609['identifier'] = NULL;
$arguments609['size'] = 'small';
$arguments609['overlay'] = NULL;
$arguments609['state'] = 'default';
$arguments609['alternativeMarkupIdentifier'] = NULL;
$arguments609['identifier'] = 'overlay-missing';

$output605 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments609, $renderChildrenClosure610, $renderingContext);

$output605 .= '
												</span>
											';
return $output605;
};
$arguments598['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Array
$array611 = array();
$array612 = array (
);$array611['0'] = $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier', $array612);

return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateStack($renderingContext, $array611);
};
$arguments598['__elseClosures'][] = function() use ($renderingContext, $self) {
$output613 = '';

$output613 .= '
												<span title="id=';
$array614 = array (
);
$output613 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier', $array614)]);

$output613 .= '" data-toggle="tooltip" data-placement="right">
													';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure616 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments615 = array();
$arguments615['identifier'] = NULL;
$arguments615['size'] = 'small';
$arguments615['overlay'] = NULL;
$arguments615['state'] = 'default';
$arguments615['alternativeMarkupIdentifier'] = NULL;
$arguments615['identifier'] = 'content-elements-mailform';

$output613 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments615, $renderChildrenClosure616, $renderingContext);

$output613 .= '
												</span>
											';
return $output613;
};

$output597 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments598, $renderChildrenClosure599, $renderingContext);

$output597 .= '
									</td>
									<td class="col-title col-responsive nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure646 = function() use ($renderingContext, $self) {
$output663 = '';

$output663 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure665 = function() use ($renderingContext, $self) {
$output666 = '';

$output666 .= '
													<div title="';
$array667 = array (
);
$output666 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array667)]);

$output666 .= '">';
$array668 = array (
);
$output666 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array668)]);

$output666 .= '</div>
												';
return $output666;
};
$arguments664 = array();

$output663 .= '';

$output663 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure670 = function() use ($renderingContext, $self) {
$output671 = '';

$output671 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure673 = function() use ($renderingContext, $self) {
$array679 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array679)]);
};
$arguments672 = array();
$arguments672['action'] = NULL;
$arguments672['arguments'] = array (
);
$arguments672['controller'] = NULL;
$arguments672['extensionName'] = NULL;
$arguments672['pluginName'] = NULL;
$arguments672['pageUid'] = NULL;
$arguments672['pageType'] = 0;
$arguments672['noCache'] = false;
$arguments672['noCacheHash'] = false;
$arguments672['section'] = '';
$arguments672['format'] = '';
$arguments672['linkAccessRestrictedPages'] = false;
$arguments672['additionalParams'] = array (
);
$arguments672['absolute'] = false;
$arguments672['addQueryString'] = false;
$arguments672['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments672['addQueryStringMethod'] = NULL;
$arguments672['additionalAttributes'] = NULL;
$arguments672['data'] = NULL;
$arguments672['class'] = NULL;
$arguments672['dir'] = NULL;
$arguments672['id'] = NULL;
$arguments672['lang'] = NULL;
$arguments672['style'] = NULL;
$arguments672['title'] = NULL;
$arguments672['accesskey'] = NULL;
$arguments672['tabindex'] = NULL;
$arguments672['onclick'] = NULL;
$arguments672['name'] = NULL;
$arguments672['rel'] = NULL;
$arguments672['rev'] = NULL;
$arguments672['target'] = NULL;
$arguments672['controller'] = 'FormEditor';
$arguments672['action'] = 'index';
// Rendering Array
$array674 = array();
$array675 = array (
);$array674['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array675);
$arguments672['arguments'] = $array674;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure677 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments676 = array();
$arguments676['key'] = NULL;
$arguments676['id'] = NULL;
$arguments676['default'] = NULL;
$arguments676['htmlEscape'] = NULL;
$arguments676['arguments'] = NULL;
$arguments676['extensionName'] = NULL;
$arguments676['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments672['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments676, $renderChildrenClosure677, $renderingContext);
// Rendering Array
$array678 = array();
$array678['toggle'] = 'tooltip';
$array678['placement'] = 'right';
$arguments672['data'] = $array678;

$output671 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments672, $renderChildrenClosure673, $renderingContext);

$output671 .= '
												';
return $output671;
};
$arguments669 = array();
$arguments669['if'] = NULL;

$output663 .= '';

$output663 .= '
										';
return $output663;
};
$arguments645 = array();
$arguments645['then'] = NULL;
$arguments645['else'] = NULL;
$arguments645['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array659 = array();
$array660 = array (
);$array659['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array660);
$array659['1'] = ' || ';
$array661 = array (
);$array659['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array661);

$expression662 = function($context) {return (($context["node0"]) || ($context["node2"]));};
$arguments645['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression662(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array659)
					),
					$renderingContext
				);
$arguments645['__thenClosure'] = function() use ($renderingContext, $self) {
$output647 = '';

$output647 .= '
													<div title="';
$array648 = array (
);
$output647 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array648)]);

$output647 .= '">';
$array649 = array (
);
$output647 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array649)]);

$output647 .= '</div>
												';
return $output647;
};
$arguments645['__elseClosures'][] = function() use ($renderingContext, $self) {
$output650 = '';

$output650 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure652 = function() use ($renderingContext, $self) {
$array658 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array658)]);
};
$arguments651 = array();
$arguments651['action'] = NULL;
$arguments651['arguments'] = array (
);
$arguments651['controller'] = NULL;
$arguments651['extensionName'] = NULL;
$arguments651['pluginName'] = NULL;
$arguments651['pageUid'] = NULL;
$arguments651['pageType'] = 0;
$arguments651['noCache'] = false;
$arguments651['noCacheHash'] = false;
$arguments651['section'] = '';
$arguments651['format'] = '';
$arguments651['linkAccessRestrictedPages'] = false;
$arguments651['additionalParams'] = array (
);
$arguments651['absolute'] = false;
$arguments651['addQueryString'] = false;
$arguments651['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments651['addQueryStringMethod'] = NULL;
$arguments651['additionalAttributes'] = NULL;
$arguments651['data'] = NULL;
$arguments651['class'] = NULL;
$arguments651['dir'] = NULL;
$arguments651['id'] = NULL;
$arguments651['lang'] = NULL;
$arguments651['style'] = NULL;
$arguments651['title'] = NULL;
$arguments651['accesskey'] = NULL;
$arguments651['tabindex'] = NULL;
$arguments651['onclick'] = NULL;
$arguments651['name'] = NULL;
$arguments651['rel'] = NULL;
$arguments651['rev'] = NULL;
$arguments651['target'] = NULL;
$arguments651['controller'] = 'FormEditor';
$arguments651['action'] = 'index';
// Rendering Array
$array653 = array();
$array654 = array (
);$array653['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array654);
$arguments651['arguments'] = $array653;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure656 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments655 = array();
$arguments655['key'] = NULL;
$arguments655['id'] = NULL;
$arguments655['default'] = NULL;
$arguments655['htmlEscape'] = NULL;
$arguments655['arguments'] = NULL;
$arguments655['extensionName'] = NULL;
$arguments655['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments651['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments655, $renderChildrenClosure656, $renderingContext);
// Rendering Array
$array657 = array();
$array657['toggle'] = 'tooltip';
$array657['placement'] = 'right';
$arguments651['data'] = $array657;

$output650 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments651, $renderChildrenClosure652, $renderingContext);

$output650 .= '
												';
return $output650;
};

$output597 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments645, $renderChildrenClosure646, $renderingContext);

$output597 .= '
									</td>
									<td class="col-control nowrap">
										<div class="btn-group" role="group">
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure681 = function() use ($renderingContext, $self) {
$output700 = '';

$output700 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure702 = function() use ($renderingContext, $self) {
$output703 = '';

$output703 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure705 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments704 = array();
$arguments704['key'] = NULL;
$arguments704['id'] = NULL;
$arguments704['default'] = NULL;
$arguments704['htmlEscape'] = NULL;
$arguments704['arguments'] = NULL;
$arguments704['extensionName'] = NULL;
$arguments704['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output703 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments704, $renderChildrenClosure705, $renderingContext)]);

$output703 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure707 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments706 = array();
$arguments706['identifier'] = NULL;
$arguments706['size'] = 'small';
$arguments706['overlay'] = NULL;
$arguments706['state'] = 'default';
$arguments706['alternativeMarkupIdentifier'] = NULL;
$arguments706['identifier'] = 'actions-open';

$output703 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments706, $renderChildrenClosure707, $renderingContext);

$output703 .= '</button>
												';
return $output703;
};
$arguments701 = array();

$output700 .= '';

$output700 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure709 = function() use ($renderingContext, $self) {
$output710 = '';

$output710 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure712 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure718 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments717 = array();
$arguments717['identifier'] = NULL;
$arguments717['size'] = 'small';
$arguments717['overlay'] = NULL;
$arguments717['state'] = 'default';
$arguments717['alternativeMarkupIdentifier'] = NULL;
$arguments717['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments717, $renderChildrenClosure718, $renderingContext);
};
$arguments711 = array();
$arguments711['action'] = NULL;
$arguments711['arguments'] = array (
);
$arguments711['controller'] = NULL;
$arguments711['extensionName'] = NULL;
$arguments711['pluginName'] = NULL;
$arguments711['pageUid'] = NULL;
$arguments711['pageType'] = 0;
$arguments711['noCache'] = false;
$arguments711['noCacheHash'] = false;
$arguments711['section'] = '';
$arguments711['format'] = '';
$arguments711['linkAccessRestrictedPages'] = false;
$arguments711['additionalParams'] = array (
);
$arguments711['absolute'] = false;
$arguments711['addQueryString'] = false;
$arguments711['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments711['addQueryStringMethod'] = NULL;
$arguments711['additionalAttributes'] = NULL;
$arguments711['data'] = NULL;
$arguments711['class'] = NULL;
$arguments711['dir'] = NULL;
$arguments711['id'] = NULL;
$arguments711['lang'] = NULL;
$arguments711['style'] = NULL;
$arguments711['title'] = NULL;
$arguments711['accesskey'] = NULL;
$arguments711['tabindex'] = NULL;
$arguments711['onclick'] = NULL;
$arguments711['name'] = NULL;
$arguments711['rel'] = NULL;
$arguments711['rev'] = NULL;
$arguments711['target'] = NULL;
$arguments711['controller'] = 'FormEditor';
$arguments711['action'] = 'index';
// Rendering Array
$array713 = array();
$array714 = array (
);$array713['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array714);
$arguments711['arguments'] = $array713;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure716 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments715 = array();
$arguments715['key'] = NULL;
$arguments715['id'] = NULL;
$arguments715['default'] = NULL;
$arguments715['htmlEscape'] = NULL;
$arguments715['arguments'] = NULL;
$arguments715['extensionName'] = NULL;
$arguments715['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments711['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments715, $renderChildrenClosure716, $renderingContext);
$arguments711['class'] = 'btn btn-default form-record-open';

$output710 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments711, $renderChildrenClosure712, $renderingContext);

$output710 .= '
												';
return $output710;
};
$arguments708 = array();
$arguments708['if'] = NULL;

$output700 .= '';

$output700 .= '
											';
return $output700;
};
$arguments680 = array();
$arguments680['then'] = NULL;
$arguments680['else'] = NULL;
$arguments680['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array696 = array();
$array697 = array (
);$array696['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array697);
$array696['1'] = ' || ';
$array698 = array (
);$array696['2'] = $renderingContext->getVariableProvider()->getByPath('form.readOnly', $array698);

$expression699 = function($context) {return (($context["node0"]) || ($context["node2"]));};
$arguments680['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression699(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array696)
					),
					$renderingContext
				);
$arguments680['__thenClosure'] = function() use ($renderingContext, $self) {
$output682 = '';

$output682 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure684 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments683 = array();
$arguments683['key'] = NULL;
$arguments683['id'] = NULL;
$arguments683['default'] = NULL;
$arguments683['htmlEscape'] = NULL;
$arguments683['arguments'] = NULL;
$arguments683['extensionName'] = NULL;
$arguments683['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed';

$output682 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments683, $renderChildrenClosure684, $renderingContext)]);

$output682 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure686 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments685 = array();
$arguments685['identifier'] = NULL;
$arguments685['size'] = 'small';
$arguments685['overlay'] = NULL;
$arguments685['state'] = 'default';
$arguments685['alternativeMarkupIdentifier'] = NULL;
$arguments685['identifier'] = 'actions-open';

$output682 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments685, $renderChildrenClosure686, $renderingContext);

$output682 .= '</button>
												';
return $output682;
};
$arguments680['__elseClosures'][] = function() use ($renderingContext, $self) {
$output687 = '';

$output687 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure689 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure695 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments694 = array();
$arguments694['identifier'] = NULL;
$arguments694['size'] = 'small';
$arguments694['overlay'] = NULL;
$arguments694['state'] = 'default';
$arguments694['alternativeMarkupIdentifier'] = NULL;
$arguments694['identifier'] = 'actions-open';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments694, $renderChildrenClosure695, $renderingContext);
};
$arguments688 = array();
$arguments688['action'] = NULL;
$arguments688['arguments'] = array (
);
$arguments688['controller'] = NULL;
$arguments688['extensionName'] = NULL;
$arguments688['pluginName'] = NULL;
$arguments688['pageUid'] = NULL;
$arguments688['pageType'] = 0;
$arguments688['noCache'] = false;
$arguments688['noCacheHash'] = false;
$arguments688['section'] = '';
$arguments688['format'] = '';
$arguments688['linkAccessRestrictedPages'] = false;
$arguments688['additionalParams'] = array (
);
$arguments688['absolute'] = false;
$arguments688['addQueryString'] = false;
$arguments688['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments688['addQueryStringMethod'] = NULL;
$arguments688['additionalAttributes'] = NULL;
$arguments688['data'] = NULL;
$arguments688['class'] = NULL;
$arguments688['dir'] = NULL;
$arguments688['id'] = NULL;
$arguments688['lang'] = NULL;
$arguments688['style'] = NULL;
$arguments688['title'] = NULL;
$arguments688['accesskey'] = NULL;
$arguments688['tabindex'] = NULL;
$arguments688['onclick'] = NULL;
$arguments688['name'] = NULL;
$arguments688['rel'] = NULL;
$arguments688['rev'] = NULL;
$arguments688['target'] = NULL;
$arguments688['controller'] = 'FormEditor';
$arguments688['action'] = 'index';
// Rendering Array
$array690 = array();
$array691 = array (
);$array690['formPersistenceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array691);
$arguments688['arguments'] = $array690;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure693 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments692 = array();
$arguments692['key'] = NULL;
$arguments692['id'] = NULL;
$arguments692['default'] = NULL;
$arguments692['htmlEscape'] = NULL;
$arguments692['arguments'] = NULL;
$arguments692['extensionName'] = NULL;
$arguments692['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form';
$arguments688['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments692, $renderChildrenClosure693, $renderingContext);
$arguments688['class'] = 'btn btn-default form-record-open';

$output687 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments688, $renderChildrenClosure689, $renderingContext);

$output687 .= '
												';
return $output687;
};

$output597 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments680, $renderChildrenClosure681, $renderingContext);

$output597 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure720 = function() use ($renderingContext, $self) {
$output772 = '';

$output772 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure774 = function() use ($renderingContext, $self) {
$output775 = '';

$output775 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure777 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments776 = array();
$arguments776['key'] = NULL;
$arguments776['id'] = NULL;
$arguments776['default'] = NULL;
$arguments776['htmlEscape'] = NULL;
$arguments776['arguments'] = NULL;
$arguments776['extensionName'] = NULL;
$arguments776['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output775 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments776, $renderChildrenClosure777, $renderingContext)]);

$output775 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure779 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments778 = array();
$arguments778['identifier'] = NULL;
$arguments778['size'] = 'small';
$arguments778['overlay'] = NULL;
$arguments778['state'] = 'default';
$arguments778['alternativeMarkupIdentifier'] = NULL;
$arguments778['identifier'] = 't3-form-icon-duplicate';

$output775 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments778, $renderChildrenClosure779, $renderingContext);

$output775 .= '</button>
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure781 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments780 = array();
$arguments780['key'] = NULL;
$arguments780['id'] = NULL;
$arguments780['default'] = NULL;
$arguments780['htmlEscape'] = NULL;
$arguments780['arguments'] = NULL;
$arguments780['extensionName'] = NULL;
$arguments780['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output775 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments780, $renderChildrenClosure781, $renderingContext)]);

$output775 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure783 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments782 = array();
$arguments782['identifier'] = NULL;
$arguments782['size'] = 'small';
$arguments782['overlay'] = NULL;
$arguments782['state'] = 'default';
$arguments782['alternativeMarkupIdentifier'] = NULL;
$arguments782['identifier'] = 'actions-edit-delete';

$output775 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments782, $renderChildrenClosure783, $renderingContext);

$output775 .= '</button>
												';
return $output775;
};
$arguments773 = array();

$output772 .= '';

$output772 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure785 = function() use ($renderingContext, $self) {
$output786 = '';

$output786 .= '
													<a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array787 = array (
);
$output786 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array787)]);

$output786 .= '" data-form-name="';
$array788 = array (
);
$output786 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array788)]);

$output786 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure790 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments789 = array();
$arguments789['key'] = NULL;
$arguments789['id'] = NULL;
$arguments789['default'] = NULL;
$arguments789['htmlEscape'] = NULL;
$arguments789['arguments'] = NULL;
$arguments789['extensionName'] = NULL;
$arguments789['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output786 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments789, $renderChildrenClosure790, $renderingContext)]);

$output786 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure792 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments791 = array();
$arguments791['identifier'] = NULL;
$arguments791['size'] = 'small';
$arguments791['overlay'] = NULL;
$arguments791['state'] = 'default';
$arguments791['alternativeMarkupIdentifier'] = NULL;
$arguments791['identifier'] = 't3-form-icon-duplicate';

$output786 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments791, $renderChildrenClosure792, $renderingContext);

$output786 .= '</a>
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure794 = function() use ($renderingContext, $self) {
$output809 = '';

$output809 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure811 = function() use ($renderingContext, $self) {
$output812 = '';

$output812 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array813 = array (
);
$output812 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array813)]);

$output812 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure815 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments814 = array();
$arguments814['key'] = NULL;
$arguments814['id'] = NULL;
$arguments814['default'] = NULL;
$arguments814['htmlEscape'] = NULL;
$arguments814['arguments'] = NULL;
$arguments814['extensionName'] = NULL;
$arguments814['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output812 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments814, $renderChildrenClosure815, $renderingContext)]);

$output812 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure817 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments816 = array();
$arguments816['identifier'] = NULL;
$arguments816['size'] = 'small';
$arguments816['overlay'] = NULL;
$arguments816['state'] = 'default';
$arguments816['alternativeMarkupIdentifier'] = NULL;
$arguments816['identifier'] = 'actions-edit-delete';

$output812 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments816, $renderChildrenClosure817, $renderingContext);

$output812 .= '</a>
														';
return $output812;
};
$arguments810 = array();

$output809 .= '';

$output809 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure819 = function() use ($renderingContext, $self) {
$output820 = '';

$output820 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure822 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments821 = array();
$arguments821['key'] = NULL;
$arguments821['id'] = NULL;
$arguments821['default'] = NULL;
$arguments821['htmlEscape'] = NULL;
$arguments821['arguments'] = NULL;
$arguments821['extensionName'] = NULL;
$arguments821['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output820 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments821, $renderChildrenClosure822, $renderingContext)]);

$output820 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure824 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments823 = array();
$arguments823['identifier'] = NULL;
$arguments823['size'] = 'small';
$arguments823['overlay'] = NULL;
$arguments823['state'] = 'default';
$arguments823['alternativeMarkupIdentifier'] = NULL;
$arguments823['identifier'] = 'actions-edit-delete';

$output820 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments823, $renderChildrenClosure824, $renderingContext);

$output820 .= '</button>
														';
return $output820;
};
$arguments818 = array();
$arguments818['if'] = NULL;

$output809 .= '';

$output809 .= '
													';
return $output809;
};
$arguments793 = array();
$arguments793['then'] = NULL;
$arguments793['else'] = NULL;
$arguments793['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array806 = array();
$array807 = array (
);$array806['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array807);

$expression808 = function($context) {return ($context["node0"]);};
$arguments793['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression808(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array806)
					),
					$renderingContext
				);
$arguments793['__thenClosure'] = function() use ($renderingContext, $self) {
$output795 = '';

$output795 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array796 = array (
);
$output795 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array796)]);

$output795 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure798 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments797 = array();
$arguments797['key'] = NULL;
$arguments797['id'] = NULL;
$arguments797['default'] = NULL;
$arguments797['htmlEscape'] = NULL;
$arguments797['arguments'] = NULL;
$arguments797['extensionName'] = NULL;
$arguments797['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output795 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments797, $renderChildrenClosure798, $renderingContext)]);

$output795 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure800 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments799 = array();
$arguments799['identifier'] = NULL;
$arguments799['size'] = 'small';
$arguments799['overlay'] = NULL;
$arguments799['state'] = 'default';
$arguments799['alternativeMarkupIdentifier'] = NULL;
$arguments799['identifier'] = 'actions-edit-delete';

$output795 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments799, $renderChildrenClosure800, $renderingContext);

$output795 .= '</a>
														';
return $output795;
};
$arguments793['__elseClosures'][] = function() use ($renderingContext, $self) {
$output801 = '';

$output801 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure803 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments802 = array();
$arguments802['key'] = NULL;
$arguments802['id'] = NULL;
$arguments802['default'] = NULL;
$arguments802['htmlEscape'] = NULL;
$arguments802['arguments'] = NULL;
$arguments802['extensionName'] = NULL;
$arguments802['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output801 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments802, $renderChildrenClosure803, $renderingContext)]);

$output801 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure805 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments804 = array();
$arguments804['identifier'] = NULL;
$arguments804['size'] = 'small';
$arguments804['overlay'] = NULL;
$arguments804['state'] = 'default';
$arguments804['alternativeMarkupIdentifier'] = NULL;
$arguments804['identifier'] = 'actions-edit-delete';

$output801 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments804, $renderChildrenClosure805, $renderingContext);

$output801 .= '</button>
														';
return $output801;
};

$output786 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments793, $renderChildrenClosure794, $renderingContext);

$output786 .= '
												';
return $output786;
};
$arguments784 = array();
$arguments784['if'] = NULL;

$output772 .= '';

$output772 .= '
											';
return $output772;
};
$arguments719 = array();
$arguments719['then'] = NULL;
$arguments719['else'] = NULL;
$arguments719['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array769 = array();
$array770 = array (
);$array769['0'] = $renderingContext->getVariableProvider()->getByPath('form.invalid', $array770);

$expression771 = function($context) {return ($context["node0"]);};
$arguments719['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression771(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array769)
					),
					$renderingContext
				);
$arguments719['__thenClosure'] = function() use ($renderingContext, $self) {
$output721 = '';

$output721 .= '
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure723 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments722 = array();
$arguments722['key'] = NULL;
$arguments722['id'] = NULL;
$arguments722['default'] = NULL;
$arguments722['htmlEscape'] = NULL;
$arguments722['arguments'] = NULL;
$arguments722['extensionName'] = NULL;
$arguments722['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed';

$output721 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments722, $renderChildrenClosure723, $renderingContext)]);

$output721 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure725 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments724 = array();
$arguments724['identifier'] = NULL;
$arguments724['size'] = 'small';
$arguments724['overlay'] = NULL;
$arguments724['state'] = 'default';
$arguments724['alternativeMarkupIdentifier'] = NULL;
$arguments724['identifier'] = 't3-form-icon-duplicate';

$output721 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments724, $renderChildrenClosure725, $renderingContext);

$output721 .= '</button>
													<button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure727 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments726 = array();
$arguments726['key'] = NULL;
$arguments726['id'] = NULL;
$arguments726['default'] = NULL;
$arguments726['htmlEscape'] = NULL;
$arguments726['arguments'] = NULL;
$arguments726['extensionName'] = NULL;
$arguments726['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output721 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments726, $renderChildrenClosure727, $renderingContext)]);

$output721 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure729 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments728 = array();
$arguments728['identifier'] = NULL;
$arguments728['size'] = 'small';
$arguments728['overlay'] = NULL;
$arguments728['state'] = 'default';
$arguments728['alternativeMarkupIdentifier'] = NULL;
$arguments728['identifier'] = 'actions-edit-delete';

$output721 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments728, $renderChildrenClosure729, $renderingContext);

$output721 .= '</button>
												';
return $output721;
};
$arguments719['__elseClosures'][] = function() use ($renderingContext, $self) {
$output730 = '';

$output730 .= '
													<a href="#" data-identifier="duplicateForm" data-form-persistence-identifier="';
$array731 = array (
);
$output730 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array731)]);

$output730 .= '" data-form-name="';
$array732 = array (
);
$output730 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array732)]);

$output730 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure734 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments733 = array();
$arguments733['key'] = NULL;
$arguments733['id'] = NULL;
$arguments733['default'] = NULL;
$arguments733['htmlEscape'] = NULL;
$arguments733['arguments'] = NULL;
$arguments733['extensionName'] = NULL;
$arguments733['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form';

$output730 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments733, $renderChildrenClosure734, $renderingContext)]);

$output730 .= '" class="btn btn-default form-record-duplicate">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure736 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments735 = array();
$arguments735['identifier'] = NULL;
$arguments735['size'] = 'small';
$arguments735['overlay'] = NULL;
$arguments735['state'] = 'default';
$arguments735['alternativeMarkupIdentifier'] = NULL;
$arguments735['identifier'] = 't3-form-icon-duplicate';

$output730 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments735, $renderChildrenClosure736, $renderingContext);

$output730 .= '</a>
													';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure738 = function() use ($renderingContext, $self) {
$output753 = '';

$output753 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure755 = function() use ($renderingContext, $self) {
$output756 = '';

$output756 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array757 = array (
);
$output756 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array757)]);

$output756 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure759 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments758 = array();
$arguments758['key'] = NULL;
$arguments758['id'] = NULL;
$arguments758['default'] = NULL;
$arguments758['htmlEscape'] = NULL;
$arguments758['arguments'] = NULL;
$arguments758['extensionName'] = NULL;
$arguments758['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output756 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments758, $renderChildrenClosure759, $renderingContext)]);

$output756 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure761 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments760 = array();
$arguments760['identifier'] = NULL;
$arguments760['size'] = 'small';
$arguments760['overlay'] = NULL;
$arguments760['state'] = 'default';
$arguments760['alternativeMarkupIdentifier'] = NULL;
$arguments760['identifier'] = 'actions-edit-delete';

$output756 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments760, $renderChildrenClosure761, $renderingContext);

$output756 .= '</a>
														';
return $output756;
};
$arguments754 = array();

$output753 .= '';

$output753 .= '
														';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure763 = function() use ($renderingContext, $self) {
$output764 = '';

$output764 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure766 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments765 = array();
$arguments765['key'] = NULL;
$arguments765['id'] = NULL;
$arguments765['default'] = NULL;
$arguments765['htmlEscape'] = NULL;
$arguments765['arguments'] = NULL;
$arguments765['extensionName'] = NULL;
$arguments765['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output764 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments765, $renderChildrenClosure766, $renderingContext)]);

$output764 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure768 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments767 = array();
$arguments767['identifier'] = NULL;
$arguments767['size'] = 'small';
$arguments767['overlay'] = NULL;
$arguments767['state'] = 'default';
$arguments767['alternativeMarkupIdentifier'] = NULL;
$arguments767['identifier'] = 'actions-edit-delete';

$output764 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments767, $renderChildrenClosure768, $renderingContext);

$output764 .= '</button>
														';
return $output764;
};
$arguments762 = array();
$arguments762['if'] = NULL;

$output753 .= '';

$output753 .= '
													';
return $output753;
};
$arguments737 = array();
$arguments737['then'] = NULL;
$arguments737['else'] = NULL;
$arguments737['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array750 = array();
$array751 = array (
);$array750['0'] = $renderingContext->getVariableProvider()->getByPath('form.removable', $array751);

$expression752 = function($context) {return ($context["node0"]);};
$arguments737['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression752(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array750)
					),
					$renderingContext
				);
$arguments737['__thenClosure'] = function() use ($renderingContext, $self) {
$output739 = '';

$output739 .= '
															<a href="#" data-identifier="removeForm" data-form-persistence-identifier="';
$array740 = array (
);
$output739 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array740)]);

$output739 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure742 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments741 = array();
$arguments741['key'] = NULL;
$arguments741['id'] = NULL;
$arguments741['default'] = NULL;
$arguments741['htmlEscape'] = NULL;
$arguments741['arguments'] = NULL;
$arguments741['extensionName'] = NULL;
$arguments741['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form';

$output739 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments741, $renderChildrenClosure742, $renderingContext)]);

$output739 .= '" class="btn btn-default form-record-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure744 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments743 = array();
$arguments743['identifier'] = NULL;
$arguments743['size'] = 'small';
$arguments743['overlay'] = NULL;
$arguments743['state'] = 'default';
$arguments743['alternativeMarkupIdentifier'] = NULL;
$arguments743['identifier'] = 'actions-edit-delete';

$output739 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments743, $renderChildrenClosure744, $renderingContext);

$output739 .= '</a>
														';
return $output739;
};
$arguments737['__elseClosures'][] = function() use ($renderingContext, $self) {
$output745 = '';

$output745 .= '
															<button class="btn btn-default form-record-delete" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure747 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments746 = array();
$arguments746['key'] = NULL;
$arguments746['id'] = NULL;
$arguments746['default'] = NULL;
$arguments746['htmlEscape'] = NULL;
$arguments746['arguments'] = NULL;
$arguments746['extensionName'] = NULL;
$arguments746['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form_not_allowed';

$output745 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments746, $renderChildrenClosure747, $renderingContext)]);

$output745 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure749 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments748 = array();
$arguments748['identifier'] = NULL;
$arguments748['size'] = 'small';
$arguments748['overlay'] = NULL;
$arguments748['state'] = 'default';
$arguments748['alternativeMarkupIdentifier'] = NULL;
$arguments748['identifier'] = 'actions-edit-delete';

$output745 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments748, $renderChildrenClosure749, $renderingContext);

$output745 .= '</button>
														';
return $output745;
};

$output730 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments737, $renderChildrenClosure738, $renderingContext);

$output730 .= '
												';
return $output730;
};

$output597 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments719, $renderChildrenClosure720, $renderingContext);

$output597 .= '
										</div>
									</td>
									<td class="nowrap">';
$array825 = array (
);
$output597 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array825)]);

$output597 .= '</td>
									<td class="nowrap">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure827 = function() use ($renderingContext, $self) {
$output837 = '';

$output837 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure839 = function() use ($renderingContext, $self) {
$output840 = '';

$output840 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array841 = array (
);
$output840 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array841)]);

$output840 .= '" data-form-name="';
$array842 = array (
);
$output840 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array842)]);

$output840 .= '">';
$array843 = array (
);
$output840 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array843)]);

$output840 .= '</a>
											';
return $output840;
};
$arguments838 = array();

$output837 .= '';

$output837 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure845 = function() use ($renderingContext, $self) {
$output846 = '';

$output846 .= '
												';
$array847 = array (
);
$output846 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array847)]);

$output846 .= '
											';
return $output846;
};
$arguments844 = array();
$arguments844['if'] = NULL;

$output837 .= '';

$output837 .= '
										';
return $output837;
};
$arguments826 = array();
$arguments826['then'] = NULL;
$arguments826['else'] = NULL;
$arguments826['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array834 = array();
$array835 = array (
);$array834['0'] = $renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array835);

$expression836 = function($context) {return ($context["node0"]);};
$arguments826['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression836(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array834)
					),
					$renderingContext
				);
$arguments826['__thenClosure'] = function() use ($renderingContext, $self) {
$output828 = '';

$output828 .= '
												<a href="#" data-identifier="showReferences" data-form-persistence-identifier="';
$array829 = array (
);
$output828 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier', $array829)]);

$output828 .= '" data-form-name="';
$array830 = array (
);
$output828 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name', $array830)]);

$output828 .= '">';
$array831 = array (
);
$output828 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array831)]);

$output828 .= '</a>
											';
return $output828;
};
$arguments826['__elseClosures'][] = function() use ($renderingContext, $self) {
$output832 = '';

$output832 .= '
												';
$array833 = array (
);
$output832 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount', $array833)]);

$output832 .= '
											';
return $output832;
};

$output597 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments826, $renderChildrenClosure827, $renderingContext);

$output597 .= '
									</td>
								</tr>
							';
return $output597;
};
$arguments594 = array();
$arguments594['each'] = NULL;
$arguments594['as'] = NULL;
$arguments594['key'] = NULL;
$arguments594['reverse'] = false;
$arguments594['iteration'] = NULL;
$array596 = array (
);$arguments594['each'] = $renderingContext->getVariableProvider()->getByPath('forms', $array596);
$arguments594['as'] = 'form';

$output583 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments594, $renderChildrenClosure595, $renderingContext);

$output583 .= '
						</tbody>
					</table>
				</div>
			</div>
		</div>
	';
return $output583;
};
$arguments581['__elseClosures'][] = function() use ($renderingContext, $self) {
$output848 = '';

$output848 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure850 = function() use ($renderingContext, $self) {
$output853 = '';

$output853 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure855 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments854 = array();
$arguments854['key'] = NULL;
$arguments854['id'] = NULL;
$arguments854['default'] = NULL;
$arguments854['htmlEscape'] = NULL;
$arguments854['arguments'] = NULL;
$arguments854['extensionName'] = NULL;
$arguments854['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.no_forms';

$output853 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments854, $renderChildrenClosure855, $renderingContext)]);

$output853 .= '</p>
			<a class="btn btn-primary" data-identifier="newForm" href="#">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure857 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments856 = array();
$arguments856['key'] = NULL;
$arguments856['id'] = NULL;
$arguments856['default'] = NULL;
$arguments856['htmlEscape'] = NULL;
$arguments856['arguments'] = NULL;
$arguments856['extensionName'] = NULL;
$arguments856['key'] = 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form';

$output853 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments856, $renderChildrenClosure857, $renderingContext)]);

$output853 .= '</a>
		';
return $output853;
};
$arguments849 = array();
$arguments849['message'] = NULL;
$arguments849['title'] = NULL;
$arguments849['state'] = -2;
$arguments849['iconName'] = NULL;
$arguments849['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure852 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments851 = array();
$arguments851['key'] = NULL;
$arguments851['id'] = NULL;
$arguments851['default'] = NULL;
$arguments851['htmlEscape'] = NULL;
$arguments851['arguments'] = NULL;
$arguments851['extensionName'] = NULL;
$arguments851['key'] = 'formManager.no_forms';
$arguments851['extensionName'] = 'form';
$arguments849['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments851, $renderChildrenClosure852, $renderingContext);
$arguments849['state'] = -1;
$renderChildrenClosure850 = $arguments849['message'] ? function() use ($arguments849) { return $arguments849['message']; } : $renderChildrenClosure850;
$output848 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments849, $renderChildrenClosure850, $renderingContext);

$output848 .= '
	';
return $output848;
};

$output573 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments581, $renderChildrenClosure582, $renderingContext);

$output573 .= '

';
return $output573;
};
$arguments571 = array();
$arguments571['name'] = NULL;
$arguments571['name'] = 'MainContent';

$output568 .= NULL;

$output568 .= '

';

return $output568;
}


}
#
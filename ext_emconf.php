<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "flux".
 *
 * Auto generated 30-06-2013 23:19
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Flux: Fluid FlexForms',
	'description' => 'Uses Fluid to render FlexForms, making them highly dynamic. Has built-in content preview in BE page module for any content using Flux. Offspring of the FED extension.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '6.0.1',
	'dependencies' => 'cms,extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Claus Due',
	'author_email' => 'claus@wildside.dk',
	'author_company' => 'Wildside A/S',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5-6.1.99',
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:173:{s:16:"ext_autoload.php";s:4:"cfda";s:21:"ext_conf_template.txt";s:4:"340b";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"b0d6";s:14:"ext_tables.php";s:4:"aec1";s:14:"ext_tables.sql";s:4:"45b3";s:9:"README.md";s:4:"2d2a";s:16:"Classes/Core.php";s:4:"2166";s:35:"Classes/Backend/AbstractPreview.php";s:4:"904f";s:42:"Classes/Backend/AreaListItemsProcessor.php";s:4:"2481";s:35:"Classes/Backend/DynamicFlexForm.php";s:4:"ca3f";s:27:"Classes/Backend/Preview.php";s:4:"97c4";s:30:"Classes/Backend/PreviewSix.php";s:4:"3d06";s:27:"Classes/Backend/TceMain.php";s:4:"b767";s:38:"Classes/Backend/TemplaVoilaPreview.php";s:4:"e547";s:38:"Classes/Backend/TypoScriptTemplate.php";s:4:"c179";s:45:"Classes/Controller/AbstractFluxController.php";s:4:"f304";s:53:"Classes/Core/ViewHelper/AbstractBackendViewHelper.php";s:4:"3dfe";s:54:"Classes/Core/ViewHelper/AbstractFlexformViewHelper.php";s:4:"4e15";s:40:"Classes/MVC/View/ExposedTemplateView.php";s:4:"dcde";s:44:"Classes/Override/Backend/Form/FormEngine.php";s:4:"a51a";s:62:"Classes/Override/Core/Configuration/FlexForm/FlexFormTools.php";s:4:"7f5d";s:50:"Classes/Override/Core/DataHandling/DataHandler.php";s:4:"f346";s:49:"Classes/Override/Core/Database/ReferenceIndex.php";s:4:"f791";s:50:"Classes/Provider/AbstractConfigurationProvider.php";s:4:"b0bb";s:63:"Classes/Provider/AbstractContentObjectConfigurationProvider.php";s:4:"bfd5";s:56:"Classes/Provider/AbstractPluginConfigurationProvider.php";s:4:"ddf4";s:51:"Classes/Provider/ConfigurationProviderInterface.php";s:4:"711d";s:64:"Classes/Provider/ContentObjectConfigurationProviderInterface.php";s:4:"3458";s:57:"Classes/Provider/PluginConfigurationProviderInterface.php";s:4:"5e0d";s:47:"Classes/Provider/StructureProviderInterface.php";s:4:"1c15";s:69:"Classes/Provider/Configuration/ContentObjectConfigurationProvider.php";s:4:"3406";s:65:"Classes/Provider/Configuration/Fallback/ConfigurationProvider.php";s:4:"ed39";s:78:"Classes/Provider/Configuration/Fallback/ContentObjectConfigurationProvider.php";s:4:"5428";s:71:"Classes/Provider/Configuration/Fallback/PluginConfigurationProvider.php";s:4:"56e6";s:56:"Classes/Provider/Structure/AbstractStructureProvider.php";s:4:"fda1";s:56:"Classes/Provider/Structure/FallbackStructureProvider.php";s:4:"9c16";s:56:"Classes/Provider/Structure/FlexFormStructureProvider.php";s:4:"eed4";s:53:"Classes/Provider/Structure/SheetStructureProvider.php";s:4:"4518";s:31:"Classes/Service/FluxService.php";s:4:"3cd7";s:41:"Classes/UserFunction/ClearValueWizard.php";s:4:"fb59";s:38:"Classes/UserFunction/ErrorReporter.php";s:4:"1511";s:35:"Classes/UserFunction/HtmlOutput.php";s:4:"1b7e";s:33:"Classes/UserFunction/NoFields.php";s:4:"380e";s:36:"Classes/UserFunction/NoSelection.php";s:4:"6c4e";s:35:"Classes/UserFunction/NoTemplate.php";s:4:"c464";s:25:"Classes/Utility/Array.php";s:4:"c82a";s:28:"Classes/Utility/Autoload.php";s:4:"4201";s:24:"Classes/Utility/Path.php";s:4:"03e1";s:27:"Classes/Utility/Version.php";s:4:"22b6";s:42:"Classes/ViewHelpers/FlexformViewHelper.php";s:4:"83ec";s:45:"Classes/ViewHelpers/IsCollapsedViewHelper.php";s:4:"848c";s:43:"Classes/ViewHelpers/LowercaseViewHelper.php";s:4:"5329";s:42:"Classes/ViewHelpers/VariableViewHelper.php";s:4:"52bb";s:48:"Classes/ViewHelpers/Be/ContentAreaViewHelper.php";s:4:"2528";s:51:"Classes/ViewHelpers/Be/ContentElementViewHelper.php";s:4:"1832";s:53:"Classes/ViewHelpers/Be/Link/Content/NewViewHelper.php";s:4:"9588";s:55:"Classes/ViewHelpers/Be/Link/Content/PasteViewHelper.php";s:4:"33cb";s:45:"Classes/ViewHelpers/Content/GetViewHelper.php";s:4:"8995";s:48:"Classes/ViewHelpers/Content/RenderViewHelper.php";s:4:"aeac";s:52:"Classes/ViewHelpers/Flexform/ContainerViewHelper.php";s:4:"65f3";s:50:"Classes/ViewHelpers/Flexform/ContentViewHelper.php";s:4:"cf03";s:47:"Classes/ViewHelpers/Flexform/DataViewHelper.php";s:4:"d72c";s:47:"Classes/ViewHelpers/Flexform/GridViewHelper.php";s:4:"d16c";s:49:"Classes/ViewHelpers/Flexform/ObjectViewHelper.php";s:4:"eb76";s:56:"Classes/ViewHelpers/Flexform/RenderContentViewHelper.php";s:4:"1645";s:50:"Classes/ViewHelpers/Flexform/SectionViewHelper.php";s:4:"cf55";s:48:"Classes/ViewHelpers/Flexform/SheetViewHelper.php";s:4:"79aa";s:62:"Classes/ViewHelpers/Flexform/Field/AbstractFieldViewHelper.php";s:4:"28d9";s:57:"Classes/ViewHelpers/Flexform/Field/CheckboxViewHelper.php";s:4:"b787";s:66:"Classes/ViewHelpers/Flexform/Field/ControllerActionsViewHelper.php";s:4:"84d0";s:55:"Classes/ViewHelpers/Flexform/Field/CustomViewHelper.php";s:4:"c280";s:53:"Classes/ViewHelpers/Flexform/Field/FileViewHelper.php";s:4:"0112";s:54:"Classes/ViewHelpers/Flexform/Field/GroupViewHelper.php";s:4:"1a26";s:53:"Classes/ViewHelpers/Flexform/Field/HideViewHelper.php";s:4:"8b3b";s:53:"Classes/ViewHelpers/Flexform/Field/HtmlViewHelper.php";s:4:"534f";s:55:"Classes/ViewHelpers/Flexform/Field/InlineViewHelper.php";s:4:"d74c";s:54:"Classes/ViewHelpers/Flexform/Field/InputViewHelper.php";s:4:"485c";s:55:"Classes/ViewHelpers/Flexform/Field/SelectViewHelper.php";s:4:"c04a";s:53:"Classes/ViewHelpers/Flexform/Field/TextViewHelper.php";s:4:"dcb2";s:53:"Classes/ViewHelpers/Flexform/Field/TreeViewHelper.php";s:4:"ccf3";s:57:"Classes/ViewHelpers/Flexform/Field/UserFuncViewHelper.php";s:4:"724d";s:56:"Classes/ViewHelpers/Flexform/Field/WizardsViewHelper.php";s:4:"2e02";s:70:"Classes/ViewHelpers/Flexform/Field/Wizard/AbstractWizardViewHelper.php";s:4:"ddf5";s:59:"Classes/ViewHelpers/Flexform/Field/Wizard/AddViewHelper.php";s:4:"ee44";s:67:"Classes/ViewHelpers/Flexform/Field/Wizard/ColorPickerViewHelper.php";s:4:"9c0b";s:60:"Classes/ViewHelpers/Flexform/Field/Wizard/EditViewHelper.php";s:4:"9dd6";s:60:"Classes/ViewHelpers/Flexform/Field/Wizard/LinkViewHelper.php";s:4:"42e5";s:60:"Classes/ViewHelpers/Flexform/Field/Wizard/ListViewHelper.php";s:4:"a208";s:62:"Classes/ViewHelpers/Flexform/Field/Wizard/SelectViewHelper.php";s:4:"4e1c";s:62:"Classes/ViewHelpers/Flexform/Field/Wizard/SliderViewHelper.php";s:4:"523e";s:63:"Classes/ViewHelpers/Flexform/Field/Wizard/SuggestViewHelper.php";s:4:"38d8";s:71:"Classes/ViewHelpers/Flexform/Field/Wizard/WizardViewHelperInterface.php";s:4:"9657";s:54:"Classes/ViewHelpers/Flexform/Grid/ColumnViewHelper.php";s:4:"347a";s:51:"Classes/ViewHelpers/Flexform/Grid/RowViewHelper.php";s:4:"c53c";s:64:"Classes/ViewHelpers/Flexform/Object/AbstractObjectViewHelper.php";s:4:"ea0c";s:57:"Classes/ViewHelpers/Flexform/Object/ContentViewHelper.php";s:4:"0b09";s:54:"Classes/ViewHelpers/Flexform/Object/FileViewHelper.php";s:4:"2040";s:55:"Classes/ViewHelpers/Flexform/Object/ImageViewHelper.php";s:4:"661b";s:54:"Classes/ViewHelpers/Flexform/Object/LinkViewHelper.php";s:4:"8f3d";s:55:"Classes/ViewHelpers/Flexform/Object/PagesViewHelper.php";s:4:"d74a";s:55:"Classes/ViewHelpers/Flexform/Object/VideoViewHelper.php";s:4:"cd29";s:75:"Classes/ViewHelpers/Flexform/Object/Controller/StandardObjectController.php";s:4:"e853";s:45:"Classes/ViewHelpers/Widget/GridViewHelper.php";s:4:"b5b7";s:56:"Classes/ViewHelpers/Widget/Controller/GridController.php";s:4:"5907";s:42:"Classes/ViewHelpers/Xml/NodeViewHelper.php";s:4:"35ad";s:33:"Documentation/ComplexityChart.png";s:4:"845f";s:30:"Documentation/PyramidChart.png";s:4:"2a4c";s:40:"Resources/Private/Language/locallang.xml";s:4:"e6ee";s:38:"Resources/Private/Layouts/Default.html";s:4:"1cc2";s:54:"Resources/Private/Partials/Flexform/Object/Content.xml";s:4:"5a96";s:51:"Resources/Private/Partials/Flexform/Object/File.xml";s:4:"65e2";s:52:"Resources/Private/Partials/Flexform/Object/Image.xml";s:4:"8c6a";s:52:"Resources/Private/Partials/Flexform/Object/Pages.xml";s:4:"0a56";s:52:"Resources/Private/Partials/Flexform/Object/Video.xml";s:4:"1323";s:69:"Resources/Private/Templates/ViewHelpers/Widget/Grid/GridElements.html";s:4:"b6ff";s:62:"Resources/Private/Templates/ViewHelpers/Widget/Grid/Index.html";s:4:"ec86";s:63:"Resources/Private/Templates/ViewHelpers/Widget/Grid/Legacy.html";s:4:"0fd2";s:37:"Resources/Public/Icons/ColorWheel.png";s:4:"0647";s:33:"Resources/Public/Icons/Plugin.png";s:4:"50ed";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:31:"Scripts/CommandLineLauncher.php";s:4:"072d";s:28:"Scripts/DynFlexMigration.php";s:4:"dc71";s:17:"Tests/phpunit.xml";s:4:"78ca";s:51:"Tests/Fixtures/Class/DummyConfigurationProvider.php";s:4:"38fc";s:53:"Tests/Fixtures/Class/InvalidConfigurationProvider.php";s:4:"b5c4";s:31:"Tests/Fixtures/Data/Records.php";s:4:"d4e8";s:27:"Tests/Fixtures/Data/Xml.php";s:4:"f2c6";s:47:"Tests/Fixtures/Templates/AbsolutelyMinimal.html";s:4:"af30";s:39:"Tests/Fixtures/Templates/BasicGrid.html";s:4:"2a69";s:43:"Tests/Fixtures/Templates/CustomSection.html";s:4:"7d2e";s:56:"Tests/Fixtures/Templates/DummyConfigurationProvider.html";s:4:"701f";s:42:"Tests/Fixtures/Templates/EmptyPreview.html";s:4:"3c23";s:43:"Tests/Fixtures/Templates/SectionObject.html";s:4:"c8a4";s:36:"Tests/Fixtures/Templates/Sheets.html";s:4:"6c55";s:45:"Tests/Fixtures/Templates/Fields/Checkbox.html";s:4:"73a1";s:54:"Tests/Fixtures/Templates/Fields/ControllerActions.html";s:4:"837e";s:43:"Tests/Fixtures/Templates/Fields/Custom.html";s:4:"0ad2";s:41:"Tests/Fixtures/Templates/Fields/File.html";s:4:"02b2";s:42:"Tests/Fixtures/Templates/Fields/Group.html";s:4:"711d";s:43:"Tests/Fixtures/Templates/Fields/Inline.html";s:4:"902c";s:42:"Tests/Fixtures/Templates/Fields/Input.html";s:4:"701f";s:43:"Tests/Fixtures/Templates/Fields/Select.html";s:4:"4cd8";s:41:"Tests/Fixtures/Templates/Fields/Text.html";s:4:"5051";s:41:"Tests/Fixtures/Templates/Fields/Tree.html";s:4:"aff2";s:45:"Tests/Fixtures/Templates/Fields/UserFunc.html";s:4:"e8a2";s:41:"Tests/Fixtures/Templates/Wizards/Add.html";s:4:"621f";s:49:"Tests/Fixtures/Templates/Wizards/ColorPicker.html";s:4:"dd7a";s:42:"Tests/Fixtures/Templates/Wizards/Edit.html";s:4:"26e6";s:42:"Tests/Fixtures/Templates/Wizards/Link.html";s:4:"8487";s:42:"Tests/Fixtures/Templates/Wizards/List.html";s:4:"28c5";s:44:"Tests/Fixtures/Templates/Wizards/Select.html";s:4:"6e59";s:44:"Tests/Fixtures/Templates/Wizards/Slider.html";s:4:"efda";s:45:"Tests/Fixtures/Templates/Wizards/Suggest.html";s:4:"d154";s:43:"Tests/Functional/AbstractFunctionalTest.php";s:4:"fc3f";s:29:"Tests/Functional/CoreTest.php";s:4:"d24c";s:46:"Tests/Functional/Hooks/DynamicFlexFormTest.php";s:4:"7e45";s:45:"Tests/Functional/Hooks/HookSubscriberTest.php";s:4:"13b5";s:38:"Tests/Functional/Hooks/PreviewTest.php";s:4:"9575";s:38:"Tests/Functional/Hooks/TceMainTest.php";s:4:"51e5";s:63:"Tests/Functional/Provider/AbstractConfigurationProviderTest.php";s:4:"3914";s:68:"Tests/Functional/Provider/ContentObjectConfigurationProviderTest.php";s:4:"daff";s:60:"Tests/Functional/Provider/DummyConfigurationProviderTest.php";s:4:"868e";s:42:"Tests/Functional/Provider/ProviderTest.php";s:4:"4d15";s:51:"Tests/Functional/Provider/StructureProviderTest.php";s:4:"7d26";s:72:"Tests/Functional/Provider/Fallback/FallbackConfigurationProviderTest.php";s:4:"e476";s:85:"Tests/Functional/Provider/Fallback/FallbackContentObjectConfigurationProviderTest.php";s:4:"9a5b";s:78:"Tests/Functional/Provider/Fallback/FallbackPluginConfigurationProviderTest.php";s:4:"d435";s:44:"Tests/Functional/Service/FluxServiceTest.php";s:4:"89a9";s:39:"Tests/Functional/Templates/ReadTest.php";s:4:"3637";s:40:"Tests/Functional/Utility/VersionTest.php";s:4:"a71b";s:34:"Tests/Functional/View/ViewTest.php";s:4:"1b45";s:46:"Tests/Functional/ViewHelpers/BasicReadTest.php";s:4:"1f3a";}',
	'suggests' => array(
	),
);

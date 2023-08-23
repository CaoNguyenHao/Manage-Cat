<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerIZ8ToY2\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerIZ8ToY2/EntityManagerGhostEbeb667.php';
require __DIR__.'/ContainerIZ8ToY2/RequestPayloadValueResolverGhost3590451.php';
require __DIR__.'/ContainerIZ8ToY2/getValidator_WhenService.php';
require __DIR__.'/ContainerIZ8ToY2/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerIZ8ToY2/getValidator_NoSuspiciousCharactersService.php';
require __DIR__.'/ContainerIZ8ToY2/getValidator_ExpressionService.php';
require __DIR__.'/ContainerIZ8ToY2/getValidator_EmailService.php';
require __DIR__.'/ContainerIZ8ToY2/getValidator_BuilderService.php';
require __DIR__.'/ContainerIZ8ToY2/getValidatorService.php';
require __DIR__.'/ContainerIZ8ToY2/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerIZ8ToY2/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerIZ8ToY2/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerIZ8ToY2/getTwig_Form_EngineService.php';
require __DIR__.'/ContainerIZ8ToY2/getTwigService.php';
require __DIR__.'/ContainerIZ8ToY2/getSession_Handler_NativeService.php';
require __DIR__.'/ContainerIZ8ToY2/getSession_FactoryService.php';
require __DIR__.'/ContainerIZ8ToY2/getServicesResetterService.php';
require __DIR__.'/ContainerIZ8ToY2/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerIZ8ToY2/getSecrets_VaultService.php';
require __DIR__.'/ContainerIZ8ToY2/getRouting_LoaderService.php';
require __DIR__.'/ContainerIZ8ToY2/getPropertyAccessorService.php';
require __DIR__.'/ContainerIZ8ToY2/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerIZ8ToY2/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerIZ8ToY2/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerIZ8ToY2/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerIZ8ToY2/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerIZ8ToY2/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/ContainerIZ8ToY2/getForm_Type_FormService.php';
require __DIR__.'/ContainerIZ8ToY2/getForm_Type_FileService.php';
require __DIR__.'/ContainerIZ8ToY2/getForm_Type_EntityService.php';
require __DIR__.'/ContainerIZ8ToY2/getForm_Type_ColorService.php';
require __DIR__.'/ContainerIZ8ToY2/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerIZ8ToY2/getForm_ServerParamsService.php';
require __DIR__.'/ContainerIZ8ToY2/getForm_RegistryService.php';
require __DIR__.'/ContainerIZ8ToY2/getForm_FactoryService.php';
require __DIR__.'/ContainerIZ8ToY2/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerIZ8ToY2/getErrorControllerService.php';
require __DIR__.'/ContainerIZ8ToY2/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerIZ8ToY2/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerIZ8ToY2/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerIZ8ToY2/getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService.php';
require __DIR__.'/ContainerIZ8ToY2/getDoctrine_Orm_Listeners_LockStoreSchemaListenerService.php';
require __DIR__.'/ContainerIZ8ToY2/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaListenerService.php';
require __DIR__.'/ContainerIZ8ToY2/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService.php';
require __DIR__.'/ContainerIZ8ToY2/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerIZ8ToY2/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerIZ8ToY2/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerIZ8ToY2/getDoctrine_Dbal_DefaultConnection_EventManagerService.php';
require __DIR__.'/ContainerIZ8ToY2/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerIZ8ToY2/getDebug_ErrorHandlerConfiguratorService.php';
require __DIR__.'/ContainerIZ8ToY2/getController_TemplateAttributeListenerService.php';
require __DIR__.'/ContainerIZ8ToY2/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerIZ8ToY2/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerIZ8ToY2/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerIZ8ToY2/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/ContainerIZ8ToY2/getCache_SystemClearerService.php';
require __DIR__.'/ContainerIZ8ToY2/getCache_SystemService.php';
require __DIR__.'/ContainerIZ8ToY2/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerIZ8ToY2/getCache_AppClearerService.php';
require __DIR__.'/ContainerIZ8ToY2/getCache_AppService.php';
require __DIR__.'/ContainerIZ8ToY2/getTemplateControllerService.php';
require __DIR__.'/ContainerIZ8ToY2/getRedirectControllerService.php';
require __DIR__.'/ContainerIZ8ToY2/getUserRepositoryService.php';
require __DIR__.'/ContainerIZ8ToY2/getProductRepositoryService.php';
require __DIR__.'/ContainerIZ8ToY2/getOrderRepositoryService.php';
require __DIR__.'/ContainerIZ8ToY2/getDetailRepositoryService.php';
require __DIR__.'/ContainerIZ8ToY2/getUserTypeService.php';
require __DIR__.'/ContainerIZ8ToY2/getProductTypeService.php';
require __DIR__.'/ContainerIZ8ToY2/getOrderTypeService.php';
require __DIR__.'/ContainerIZ8ToY2/getDetailTypeService.php';
require __DIR__.'/ContainerIZ8ToY2/getUserControllerService.php';
require __DIR__.'/ContainerIZ8ToY2/getProductControllerService.php';
require __DIR__.'/ContainerIZ8ToY2/getOrderControllerService.php';
require __DIR__.'/ContainerIZ8ToY2/getDetailControllerService.php';
require __DIR__.'/ContainerIZ8ToY2/get_ServiceLocator_Y4Zrx_Service.php';
require __DIR__.'/ContainerIZ8ToY2/get_ServiceLocator_RvMNZGhService.php';
require __DIR__.'/ContainerIZ8ToY2/get_ServiceLocator_RuxHxcAService.php';
require __DIR__.'/ContainerIZ8ToY2/get_ServiceLocator_KPUOGb8Service.php';
require __DIR__.'/ContainerIZ8ToY2/get_ServiceLocator_IISxcVService.php';
require __DIR__.'/ContainerIZ8ToY2/get_ServiceLocator_WTtCrJService.php';
require __DIR__.'/ContainerIZ8ToY2/get_ServiceLocator_TxLdxz8Service.php';
require __DIR__.'/ContainerIZ8ToY2/get_ServiceLocator_O2p6Lk7Service.php';
require __DIR__.'/ContainerIZ8ToY2/get_ServiceLocator_N7dcDh9Service.php';
require __DIR__.'/ContainerIZ8ToY2/get_ServiceLocator_Hz5btgeService.php';
require __DIR__.'/ContainerIZ8ToY2/get_ServiceLocator_EDFwMy7Service.php';
require __DIR__.'/ContainerIZ8ToY2/get_ServiceLocator_DZowHzbService.php';
require __DIR__.'/ContainerIZ8ToY2/get_ServiceLocator_CsMkqUaService.php';
require __DIR__.'/ContainerIZ8ToY2/get_ServiceLocator_CiMhHnTService.php';
require __DIR__.'/ContainerIZ8ToY2/get_ServiceLocator_4n4ylFvService.php';
require __DIR__.'/ContainerIZ8ToY2/get_ServiceLocator__IjCRIService.php';
require __DIR__.'/ContainerIZ8ToY2/get_Debug_ValueResolver_Doctrine_Orm_EntityValueResolverService.php';
require __DIR__.'/ContainerIZ8ToY2/get_Debug_ValueResolver_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerIZ8ToY2/get_Debug_ValueResolver_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerIZ8ToY2/get_Debug_ValueResolver_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerIZ8ToY2/get_Debug_ValueResolver_ArgumentResolver_RequestPayloadService.php';
require __DIR__.'/ContainerIZ8ToY2/get_Debug_ValueResolver_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerIZ8ToY2/get_Debug_ValueResolver_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerIZ8ToY2/get_Debug_ValueResolver_ArgumentResolver_QueryParameterValueResolverService.php';
require __DIR__.'/ContainerIZ8ToY2/get_Debug_ValueResolver_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerIZ8ToY2/get_Debug_ValueResolver_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerIZ8ToY2/get_Debug_ValueResolver_ArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerIZ8ToY2/get_Debug_ValueResolver_ArgumentResolver_BackedEnumResolverService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\QueryParameterValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\DetailController';
$classes[] = 'App\Controller\OrderController';
$classes[] = 'App\Controller\ProductController';
$classes[] = 'App\Controller\UserController';
$classes[] = 'App\Form\DetailType';
$classes[] = 'App\Form\OrderType';
$classes[] = 'App\Form\ProductType';
$classes[] = 'App\Form\UserType';
$classes[] = 'App\Repository\DetailRepository';
$classes[] = 'App\Repository\OrderRepository';
$classes[] = 'App\Repository\ProductRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\CacheAttributeListener';
$classes[] = 'Symfony\Bridge\Twig\EventListener\TemplateAttributeListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\DBAL\Tools\DsnParser';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\LockStoreSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\Psr4DirectoryLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NoSuspiciousCharactersValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\WhenValidator';

$preloaded = Preloader::preload($classes);

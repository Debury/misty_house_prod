<?php
// source: /var/www/html/wp-content/plugins/packeta/config/config.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_10fc08cdc1 extends Packetery\Nette\DI\Container
{
	protected $types = ['container' => 'Packetery\Nette\DI\Container'];
	protected $aliases = [];

	protected $wiring = [
		'Packetery\Nette\DI\Container' => [['container']],
		'Packetery\Module\Framework\WpAdapter' => [['01']],
		'Packetery\Module\Framework\WcAdapter' => [['02']],
		'Packetery\Module\Order\MetaboxesWrapper' => [['03']],
		'Packetery\Module\Order\Form' => [['04']],
		'Packetery\Module\Order\CarrierModal' => [['05']],
		'Packetery\Module\Order\CarrierModalFormFactory' => [['06']],
		'Packetery\Module\ContextResolver' => [['07']],
		'Packetery\Module\Order\PacketCanceller' => [['08']],
		'Packetery\Module\EntityFactory\Address' => [['09']],
		'Packetery\Module\ModuleHelper' => [['010']],
		'Packetery\Module\Payment\PaymentHelper' => [['011']],
		'Packetery\Module\Log\Purger' => [['012']],
		'Packetery\Module\Log\Repository' => [['013']],
		'Packetery\Core\Log\ILogger' => [['014']],
		'Packetery\Module\Log\DbLogger' => [['014']],
		'Packetery\Module\Log\Page' => [['015']],
		'Packetery\Module\CronService' => [['016']],
		'Packetery\Module\Product\DataTab' => [['017']],
		'Packetery\Module\Product\ProductEntityFactory' => [['018']],
		'Packetery\Module\ProductCategory\ProductCategoryEntityFactory' => [['019']],
		'Packetery\Module\ProductCategory\FormFields' => [['020']],
		'Packetery\Core\CoreHelper' => [['021']],
		'Packetery\Core\Interfaces\IWebRequestClient' => [['022']],
		'Packetery\Module\WebRequestClient' => [['022']],
		'Packetery\Module\MessageManager' => [['023']],
		'Packetery\Module\Order\Metabox' => [['024']],
		'Packetery\Module\Order\CustomsDeclarationMetabox' => [['025']],
		'Packetery\Module\Plugin' => [['026']],
		'Packetery\Module\LatteEngineFactory' => [['latteEngineFactory']],
		'Packetery\Latte\Engine' => [['latteEngine']],
		'Packetery\Module\Options\Page' => [['027']],
		'Packetery\Module\Options\OptionsProvider' => [['optionsProvider']],
		'Packetery\Module\Carrier\Downloader' => [['028']],
		'Packetery\Module\Carrier\Updater' => [['029']],
		'Packetery\Module\Carrier\Repository' => [['030']],
		'Packetery\Module\Carrier\CarrierOptionsFactory' => [['031']],
		'Packetery\Module\WpdbAdapterFactory' => [['wpdbAdapterFactory']],
		'Packetery\Module\WpdbAdapter' => [['032']],
		'Packetery\Tracy\IBarPanel' => [['033']],
		'Packetery\Module\WpdbTracyPanel' => [['033']],
		'Packetery\Module\Carrier\CarDeliveryConfig' => [['034']],
		'Packetery\Module\Checkout\Checkout' => [['035']],
		'Packetery\Module\Checkout\CheckoutService' => [['036']],
		'Packetery\Module\Checkout\CheckoutRenderer' => [['037']],
		'Packetery\Module\Checkout\CheckoutStorage' => [['038']],
		'Packetery\Module\Checkout\CheckoutSettings' => [['039']],
		'Packetery\Module\Checkout\CheckoutValidator' => [['040']],
		'Packetery\Module\Checkout\CartService' => [['041']],
		'Packetery\Module\Checkout\SessionService' => [['042']],
		'Packetery\Module\Checkout\ShippingRateFactory' => [['043']],
		'Packetery\Module\Checkout\OrderUpdater' => [['044']],
		'Packetery\Module\Carrier\OptionsPage' => [['045']],
		'Packetery\Module\FormFactory' => [['046']],
		'Packetery\Module\DashboardWidget' => [['047']],
		'Packetery\Module\Carrier\CountryListingPage' => [['048']],
		'Packetery\Module\Order\BulkActions' => [['049']],
		'Packetery\Module\Order\Repository' => [['050']],
		'Packetery\Module\Order\LabelPrint' => [['051']],
		'Packetery\Module\Order\ApiExtender' => [['052']],
		'Packetery\Module\Order\GridExtender' => [['053']],
		'Packetery\Core\Api\Soap\Client' => [['054']],
		'Packetery\Module\Order\DetailCommonLogic' => [['055']],
		'Packetery\Module\Order\PacketActionsCommonLogic' => [['056']],
		'Packetery\Module\Order\PacketSubmitter' => [['057']],
		'Packetery\Module\Order\PacketClaimSubmitter' => [['058']],
		'Packetery\Module\EntityFactory\Carrier' => [['059']],
		'Packetery\Module\EntityFactory\CustomsDeclaration' => [['060']],
		'Packetery\Module\EntityFactory\SizeFactory' => [['061']],
		'Packetery\Module\Order\Builder' => [['062']],
		'Packetery\Core\Validator\Address' => [['063']],
		'Packetery\Core\Validator\Size' => [['064']],
		'Packetery\Core\Interfaces\ValidatorTranslationsInterface' => [['065']],
		'Packetery\Module\Order\ValidatorTranslations' => [['065']],
		'Packetery\Module\Order\OrderValidatorFactory' => [['066']],
		'Packetery\Core\Validator\Order' => [['067']],
		'Packetery\Module\Options\Repository' => [['068']],
		'Packetery\Module\CustomsDeclaration\Repository' => [['069']],
		'WP_REST_Controller' => [['070', '072']],
		'Packetery\Module\Api\Internal\OrderController' => [['070']],
		'Packetery\Module\Api\BaseRouter' => [['071', '073']],
		'Packetery\Module\Api\Internal\OrderRouter' => [['071']],
		'Packetery\Module\Api\Internal\CheckoutController' => [['072']],
		'Packetery\Module\Api\Internal\CheckoutRouter' => [['073']],
		'Packetery\Module\Api\Registrar' => [['074']],
		'Packetery\Module\Order\Modal' => [['075']],
		'Packetery\Module\Order\LabelPrintModal' => [['076']],
		'Packetery\Module\Options\Exporter' => [['077']],
		'Packetery\Module\Order\CollectionPrint' => [['078']],
		'Packetery\Module\Order\PacketSynchronizer' => [['079']],
		'Packetery\Module\Order\PacketAutoSubmitter' => [['080']],
		'Packetery\Nette\Http\RequestFactory' => [['081']],
		'Packetery\Module\HttpRequestFactory' => [['requestFactory']],
		'Packetery\Nette\Http\IRequest' => [['082']],
		'Packetery\Nette\Http\Request' => [['082']],
		'Packetery\Module\Upgrade' => [['083']],
		'Packetery\Module\Upgrade\Version_1_4_2' => [['084']],
		'Packetery\Module\QueryProcessor' => [['085']],
		'Packetery\Module\WeightCalculator' => [['086']],
		'Packetery\Module\Checkout\CurrencySwitcherService' => [['087']],
		'Packetery\Core\Api\Soap\CreatePacketMapper' => [['088']],
		'Packetery\Module\Order\PickupPointValidator' => [['089']],
		'Packetery\Module\Checkout\RateCalculator' => [['090']],
		'Packetery\Module\Carrier\PacketaPickupPointsConfig' => [['091']],
		'Packetery\Module\Carrier\EntityRepository' => [['092']],
		'Packetery\Module\Carrier\CarrierActivityBridge' => [['093']],
		'Packetery\Module\Order\AttributeMapper' => [['094']],
		'Packetery\Module\WidgetOptionsBuilder' => [['095']],
		'Packetery\Core\PickupPointProvider\CompoundCarrierCollectionFactory' => [['096']],
		'Packetery\Core\PickupPointProvider\VendorCollectionFactory' => [['097']],
		'Packetery\Module\Options\FlagManager\FeatureFlagProvider' => [['098']],
		'Packetery\Module\Options\FlagManager\FeatureFlagNotice' => [['099']],
		'Packetery\Module\Options\FlagManager\FeatureFlagDownloader' => [['0100']],
		'Packetery\Module\Options\FlagManager\FeatureFlagStorage' => [['0101']],
		'Packetery\Module\Options\TransientPurger' => [['0102']],
		'Packetery\Module\Order\WcOrderActions' => [['0103']],
		'Packetery\Module\ShippingZoneRepository' => [['0104']],
		'Packetery\Module\Forms\StoredUntilFormFactory' => [['0105']],
		'Packetery\Module\Order\StoredUntilModal' => [['0106']],
		'Packetery\Module\Order\PacketSetStoredUntil' => [['0107']],
		'Packetery\Module\Hooks\HookRegistrar' => [['0108']],
		'Packetery\Module\Blocks\BlockHooks' => [['0109']],
		'Packetery\Module\Hooks\PluginHooks' => [['0110']],
		'Packetery\Module\Hooks\UpdateOrderHook' => [['0111']],
		'Packetery\Module\Views\UrlBuilder' => [['0112']],
		'Packetery\Module\Views\ViewAdmin' => [['0113']],
		'Packetery\Module\Views\ViewFrontend' => [['0114']],
		'Packetery\Module\Views\ViewMail' => [['0115']],
		'Packetery\Module\Views\AssetManager' => [['0116']],
		'Packetery\Module\Shipping\ShippingProvider' => [['0117']],
		'Packetery\Module\Shipping\ShippingMethodGenerator' => [['0118']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
	}


	public function createService01(): Packetery\Module\Framework\WpAdapter
	{
		return new Packetery\Module\Framework\WpAdapter;
	}


	public function createService02(): Packetery\Module\Framework\WcAdapter
	{
		return new Packetery\Module\Framework\WcAdapter;
	}


	public function createService03(): Packetery\Module\Order\MetaboxesWrapper
	{
		return new Packetery\Module\Order\MetaboxesWrapper($this->getService('024'), $this->getService('025'), $this->getService('050'));
	}


	public function createService04(): Packetery\Module\Order\Form
	{
		return new Packetery\Module\Order\Form($this->getService('046'), $this->getService('optionsProvider'));
	}


	public function createService05(): Packetery\Module\Order\CarrierModal
	{
		return new Packetery\Module\Order\CarrierModal(
			$this->getService('latteEngine'),
			$this->getService('055'),
			$this->getService('06'),
			$this->getService('050'),
			$this->getService('092'),
			$this->getService('optionsProvider'),
			$this->getService('031')
		);
	}


	public function createService06(): Packetery\Module\Order\CarrierModalFormFactory
	{
		return new Packetery\Module\Order\CarrierModalFormFactory($this->getService('046'));
	}


	public function createService07(): Packetery\Module\ContextResolver
	{
		return new Packetery\Module\ContextResolver($this->getService('082'));
	}


	public function createService08(): Packetery\Module\Order\PacketCanceller
	{
		return new Packetery\Module\Order\PacketCanceller(
			$this->getService('054'),
			$this->getService('014'),
			$this->getService('050'),
			$this->getService('082'),
			$this->getService('optionsProvider'),
			$this->getService('023'),
			$this->getService('056'),
			$this->getService('0103'),
			$this->getService('010')
		);
	}


	public function createService09(): Packetery\Module\EntityFactory\Address
	{
		return new Packetery\Module\EntityFactory\Address;
	}


	public function createService010(): Packetery\Module\ModuleHelper
	{
		return new Packetery\Module\ModuleHelper($this->getService('01'));
	}


	public function createService011(): Packetery\Module\Payment\PaymentHelper
	{
		return new Packetery\Module\Payment\PaymentHelper($this->getService('optionsProvider'));
	}


	public function createService012(): Packetery\Module\Log\Purger
	{
		return new Packetery\Module\Log\Purger($this->getService('013'));
	}


	public function createService013(): Packetery\Module\Log\Repository
	{
		return new Packetery\Module\Log\Repository($this->getService('032'));
	}


	public function createService014(): Packetery\Module\Log\DbLogger
	{
		return new Packetery\Module\Log\DbLogger($this->getService('013'));
	}


	public function createService015(): Packetery\Module\Log\Page
	{
		return new Packetery\Module\Log\Page(
			$this->getService('latteEngine'),
			$this->getService('014'),
			$this->getService('082'),
			$this->getService('010'),
			$this->getService('0112')
		);
	}


	public function createService016(): Packetery\Module\CronService
	{
		return new Packetery\Module\CronService(
			$this->getService('012'),
			$this->getService('028'),
			$this->getService('079'),
			$this->getService('0102')
		);
	}


	public function createService017(): Packetery\Module\Product\DataTab
	{
		return new Packetery\Module\Product\DataTab(
			$this->getService('046'),
			$this->getService('latteEngine'),
			$this->getService('092'),
			$this->getService('034'),
			$this->getService('018')
		);
	}


	public function createService018(): Packetery\Module\Product\ProductEntityFactory
	{
		return new Packetery\Module\Product\ProductEntityFactory($this->getService('02'));
	}


	public function createService019(): Packetery\Module\ProductCategory\ProductCategoryEntityFactory
	{
		return new Packetery\Module\ProductCategory\ProductCategoryEntityFactory($this->getService('01'));
	}


	public function createService020(): Packetery\Module\ProductCategory\FormFields
	{
		return new Packetery\Module\ProductCategory\FormFields(
			$this->getService('046'),
			$this->getService('latteEngine'),
			$this->getService('092'),
			$this->getService('034'),
			$this->getService('019')
		);
	}


	public function createService021(): Packetery\Core\CoreHelper
	{
		return new Packetery\Core\CoreHelper('https://tracking.packeta.com/Z%s');
	}


	public function createService022(): Packetery\Module\WebRequestClient
	{
		return new Packetery\Module\WebRequestClient;
	}


	public function createService023(): Packetery\Module\MessageManager
	{
		return new Packetery\Module\MessageManager($this->getService('latteEngine'));
	}


	public function createService024(): Packetery\Module\Order\Metabox
	{
		return new Packetery\Module\Order\Metabox(
			$this->getService('latteEngine'),
			$this->getService('023'),
			$this->getService('021'),
			$this->getService('082'),
			$this->getService('optionsProvider'),
			$this->getService('050'),
			$this->getService('015'),
			$this->getService('094'),
			$this->getService('095'),
			$this->getService('092'),
			$this->getService('066'),
			$this->getService('055'),
			$this->getService('04'),
			$this->getService('05'),
			$this->getService('01')
		);
	}


	public function createService025(): Packetery\Module\Order\CustomsDeclarationMetabox
	{
		return new Packetery\Module\Order\CustomsDeclarationMetabox(
			$this->getService('latteEngine'),
			$this->getService('046'),
			$this->getService('069'),
			$this->getService('060'),
			$this->getService('082'),
			$this->getService('023'),
			$this->getService('055')
		);
	}


	public function createService026(): Packetery\Module\Plugin
	{
		return new Packetery\Module\Plugin($this->getService('0108'));
	}


	public function createService027(): Packetery\Module\Options\Page
	{
		return new Packetery\Module\Options\Page(
			$this->getService('latteEngine'),
			$this->getService('optionsProvider'),
			$this->getService('046'),
			$this->getService('054'),
			$this->getService('014'),
			$this->getService('023'),
			$this->getService('082'),
			$this->getService('010'),
			$this->getService('0112'),
			'e-commerce.support@packeta.com'
		);
	}


	public function createService028(): Packetery\Module\Carrier\Downloader
	{
		return new Packetery\Module\Carrier\Downloader(
			$this->getService('029'),
			$this->getService('optionsProvider'),
			$this->getService('022'),
			$this->getService('01')
		);
	}


	public function createService029(): Packetery\Module\Carrier\Updater
	{
		return new Packetery\Module\Carrier\Updater($this->getService('030'), $this->getService('014'));
	}


	public function createService030(): Packetery\Module\Carrier\Repository
	{
		return new Packetery\Module\Carrier\Repository($this->getService('032'));
	}


	public function createService031(): Packetery\Module\Carrier\CarrierOptionsFactory
	{
		return new Packetery\Module\Carrier\CarrierOptionsFactory($this->getService('01'));
	}


	public function createService032(): Packetery\Module\WpdbAdapter
	{
		return $this->getService('wpdbAdapterFactory')->create();
	}


	public function createService033(): Packetery\Module\WpdbTracyPanel
	{
		return new Packetery\Module\WpdbTracyPanel($this->getService('032'), $this->getService('latteEngine'));
	}


	public function createService034(): Packetery\Module\Carrier\CarDeliveryConfig
	{
		return new Packetery\Module\Carrier\CarDeliveryConfig(false, false);
	}


	public function createService035(): Packetery\Module\Checkout\Checkout
	{
		return new Packetery\Module\Checkout\Checkout(
			$this->getService('01'),
			$this->getService('02'),
			$this->getService('031'),
			$this->getService('optionsProvider'),
			$this->getService('050'),
			$this->getService('087'),
			$this->getService('090'),
			$this->getService('092'),
			$this->getService('011'),
			$this->getService('036'),
			$this->getService('037'),
			$this->getService('041'),
			$this->getService('042'),
			$this->getService('040'),
			$this->getService('044')
		);
	}


	public function createService036(): Packetery\Module\Checkout\CheckoutService
	{
		return new Packetery\Module\Checkout\CheckoutService(
			$this->getService('02'),
			$this->getService('082'),
			$this->getService('034'),
			$this->getService('030'),
			$this->getService('092'),
			$this->getService('091'),
			$this->getService('optionsProvider')
		);
	}


	public function createService037(): Packetery\Module\Checkout\CheckoutRenderer
	{
		return new Packetery\Module\Checkout\CheckoutRenderer(
			$this->getService('latteEngine'),
			$this->getService('0112'),
			$this->getService('036'),
			$this->getService('01')
		);
	}


	public function createService038(): Packetery\Module\Checkout\CheckoutStorage
	{
		return new Packetery\Module\Checkout\CheckoutStorage($this->getService('082'), $this->getService('01'), $this->getService('02'));
	}


	public function createService039(): Packetery\Module\Checkout\CheckoutSettings
	{
		return new Packetery\Module\Checkout\CheckoutSettings(
			$this->getService('092'),
			$this->getService('095'),
			$this->getService('0112'),
			$this->getService('034'),
			$this->getService('optionsProvider'),
			$this->getService('073'),
			$this->getService('031'),
			$this->getService('038'),
			$this->getService('036'),
			$this->getService('041'),
			$this->getService('042'),
			$this->getService('01'),
			$this->getService('02')
		);
	}


	public function createService040(): Packetery\Module\Checkout\CheckoutValidator
	{
		return new Packetery\Module\Checkout\CheckoutValidator(
			$this->getService('089'),
			$this->getService('01'),
			$this->getService('02'),
			$this->getService('036'),
			$this->getService('041'),
			$this->getService('042'),
			$this->getService('038'),
			$this->getService('031'),
			$this->getService('092')
		);
	}


	public function createService041(): Packetery\Module\Checkout\CartService
	{
		return new Packetery\Module\Checkout\CartService(
			$this->getService('01'),
			$this->getService('02'),
			$this->getService('018'),
			$this->getService('019'),
			$this->getService('optionsProvider')
		);
	}


	public function createService042(): Packetery\Module\Checkout\SessionService
	{
		return new Packetery\Module\Checkout\SessionService($this->getService('02'));
	}


	public function createService043(): Packetery\Module\Checkout\ShippingRateFactory
	{
		return new Packetery\Module\Checkout\ShippingRateFactory(
			$this->getService('01'),
			$this->getService('02'),
			$this->getService('036'),
			$this->getService('092'),
			$this->getService('041'),
			$this->getService('031'),
			$this->getService('034'),
			$this->getService('090'),
			$this->getService('optionsProvider')
		);
	}


	public function createService044(): Packetery\Module\Checkout\OrderUpdater
	{
		return new Packetery\Module\Checkout\OrderUpdater(
			$this->getService('050'),
			$this->getService('036'),
			$this->getService('038'),
			$this->getService('02'),
			$this->getService('01'),
			$this->getService('optionsProvider'),
			$this->getService('094'),
			$this->getService('092'),
			$this->getService('041'),
			$this->getService('080'),
			$this->getService('061')
		);
	}


	public function createService045(): Packetery\Module\Carrier\OptionsPage
	{
		return new Packetery\Module\Carrier\OptionsPage(
			$this->getService('latteEngine'),
			$this->getService('092'),
			$this->getService('046'),
			$this->getService('082'),
			$this->getService('048'),
			$this->getService('023'),
			$this->getService('091'),
			$this->getService('098'),
			$this->getService('034'),
			$this->getService('031'),
			$this->getService('010'),
			$this->getService('0112'),
			$this->getService('01')
		);
	}


	public function createService046(): Packetery\Module\FormFactory
	{
		return new Packetery\Module\FormFactory($this->getService('082'));
	}


	public function createService047(): Packetery\Module\DashboardWidget
	{
		return new Packetery\Module\DashboardWidget(
			$this->getService('latteEngine'),
			$this->getService('030'),
			$this->getService('optionsProvider'),
			$this->getService('045'),
			$this->getService('027'),
			[
				'active' => true,
				'validTo' => new \DateTimeImmutable('2023-03-31 23:59:59.000000', new \DateTimeZone('UTC')),
				'url' => 'https://forms.office.com/e/2YjCu9ZEt0',
			],
			$this->getService('092'),
			$this->getService('010'),
			$this->getService('031'),
			$this->getService('0112'),
			$this->getService('093')
		);
	}


	public function createService048(): Packetery\Module\Carrier\CountryListingPage
	{
		return new Packetery\Module\Carrier\CountryListingPage(
			$this->getService('latteEngine'),
			$this->getService('030'),
			$this->getService('028'),
			$this->getService('082'),
			$this->getService('optionsProvider'),
			$this->getService('015'),
			$this->getService('091'),
			$this->getService('092'),
			$this->getService('034'),
			$this->getService('031'),
			$this->getService('010'),
			$this->getService('0112'),
			$this->getService('046'),
			$this->getService('093')
		);
	}


	public function createService049(): Packetery\Module\Order\BulkActions
	{
		return new Packetery\Module\Order\BulkActions(
			$this->getService('latteEngine'),
			$this->getService('082'),
			$this->getService('057'),
			$this->getService('050')
		);
	}


	public function createService050(): Packetery\Module\Order\Repository
	{
		return new Packetery\Module\Order\Repository(
			$this->getService('032'),
			$this->getService('062'),
			$this->getService('021'),
			$this->getService('091'),
			$this->getService('092'),
			$this->getService('069')
		);
	}


	public function createService051(): Packetery\Module\Order\LabelPrint
	{
		return new Packetery\Module\Order\LabelPrint(
			$this->getService('latteEngine'),
			$this->getService('optionsProvider'),
			$this->getService('046'),
			$this->getService('082'),
			$this->getService('054'),
			$this->getService('023'),
			$this->getService('014'),
			$this->getService('050'),
			$this->getService('056'),
			$this->getService('010')
		);
	}


	public function createService052(): Packetery\Module\Order\ApiExtender
	{
		return new Packetery\Module\Order\ApiExtender($this->getService('050'));
	}


	public function createService053(): Packetery\Module\Order\GridExtender
	{
		return new Packetery\Module\Order\GridExtender(
			$this->getService('021'),
			$this->getService('latteEngine'),
			$this->getService('082'),
			$this->getService('050'),
			$this->getService('066'),
			$this->getService('07'),
			$this->getService('031'),
			$this->getService('01'),
			$this->getService('010'),
			$this->getService('061')
		);
	}


	public function createService054(): Packetery\Core\Api\Soap\Client
	{
		return new Packetery\Core\Api\Soap\Client(
			$this->getService('optionsProvider')->get_api_password(),
			'http://www.zasilkovna.cz/api/soap-php-bugfix.wsdl'
		);
	}


	public function createService055(): Packetery\Module\Order\DetailCommonLogic
	{
		return new Packetery\Module\Order\DetailCommonLogic(
			$this->getService('07'),
			$this->getService('082'),
			$this->getService('050'),
			$this->getService('optionsProvider'),
			$this->getService('02')
		);
	}


	public function createService056(): Packetery\Module\Order\PacketActionsCommonLogic
	{
		return new Packetery\Module\Order\PacketActionsCommonLogic(
			$this->getService('050'),
			$this->getService('082'),
			$this->getService('023')
		);
	}


	public function createService057(): Packetery\Module\Order\PacketSubmitter
	{
		return new Packetery\Module\Order\PacketSubmitter(
			$this->getService('054'),
			$this->getService('066'),
			$this->getService('014'),
			$this->getService('050'),
			$this->getService('088'),
			$this->getService('082'),
			$this->getService('023'),
			$this->getService('015'),
			$this->getService('056'),
			$this->getService('069'),
			$this->getService('079'),
			$this->getService('010'),
			$this->getService('021')
		);
	}


	public function createService058(): Packetery\Module\Order\PacketClaimSubmitter
	{
		return new Packetery\Module\Order\PacketClaimSubmitter(
			$this->getService('054'),
			$this->getService('014'),
			$this->getService('050'),
			$this->getService('082'),
			$this->getService('023'),
			$this->getService('015'),
			$this->getService('056'),
			$this->getService('010'),
			$this->getService('021')
		);
	}


	public function createService059(): Packetery\Module\EntityFactory\Carrier
	{
		return new Packetery\Module\EntityFactory\Carrier;
	}


	public function createService060(): Packetery\Module\EntityFactory\CustomsDeclaration
	{
		return new Packetery\Module\EntityFactory\CustomsDeclaration;
	}


	public function createService061(): Packetery\Module\EntityFactory\SizeFactory
	{
		return new Packetery\Module\EntityFactory\SizeFactory($this->getService('optionsProvider'));
	}


	public function createService062(): Packetery\Module\Order\Builder
	{
		return new Packetery\Module\Order\Builder(
			$this->getService('optionsProvider'),
			$this->getService('086'),
			$this->getService('069'),
			$this->getService('091'),
			$this->getService('021'),
			$this->getService('011'),
			$this->getService('092')
		);
	}


	public function createService063(): Packetery\Core\Validator\Address
	{
		return new Packetery\Core\Validator\Address;
	}


	public function createService064(): Packetery\Core\Validator\Size
	{
		return new Packetery\Core\Validator\Size;
	}


	public function createService065(): Packetery\Module\Order\ValidatorTranslations
	{
		return new Packetery\Module\Order\ValidatorTranslations;
	}


	public function createService066(): Packetery\Module\Order\OrderValidatorFactory
	{
		return new Packetery\Module\Order\OrderValidatorFactory(
			$this->getService('063'),
			$this->getService('064'),
			$this->getService('065')
		);
	}


	public function createService067(): Packetery\Core\Validator\Order
	{
		return new Packetery\Core\Validator\Order($this->getService('063'), $this->getService('064'), $this->getService('065'));
	}


	public function createService068(): Packetery\Module\Options\Repository
	{
		return new Packetery\Module\Options\Repository($this->getService('032'));
	}


	public function createService069(): Packetery\Module\CustomsDeclaration\Repository
	{
		return new Packetery\Module\CustomsDeclaration\Repository($this->getService('032'), $this->getService('060'));
	}


	public function createService070(): Packetery\Module\Api\Internal\OrderController
	{
		return new Packetery\Module\Api\Internal\OrderController(
			$this->getService('071'),
			$this->getService('050'),
			$this->getService('053'),
			$this->getService('066'),
			$this->getService('021'),
			$this->getService('04'),
			$this->getService('0105'),
			$this->getService('0107'),
			$this->getService('optionsProvider')
		);
	}


	public function createService071(): Packetery\Module\Api\Internal\OrderRouter
	{
		return new Packetery\Module\Api\Internal\OrderRouter;
	}


	public function createService072(): Packetery\Module\Api\Internal\CheckoutController
	{
		return new Packetery\Module\Api\Internal\CheckoutController($this->getService('073'), $this->getService('038'));
	}


	public function createService073(): Packetery\Module\Api\Internal\CheckoutRouter
	{
		return new Packetery\Module\Api\Internal\CheckoutRouter;
	}


	public function createService074(): Packetery\Module\Api\Registrar
	{
		return new Packetery\Module\Api\Registrar($this->getService('070'), $this->getService('072'));
	}


	public function createService075(): Packetery\Module\Order\Modal
	{
		return new Packetery\Module\Order\Modal(
			$this->getService('latteEngine'),
			$this->getService('04'),
			$this->getService('071'),
			$this->getService('01')
		);
	}


	public function createService076(): Packetery\Module\Order\LabelPrintModal
	{
		return new Packetery\Module\Order\LabelPrintModal(
			$this->getService('latteEngine'),
			$this->getService('051'),
			$this->getService('optionsProvider'),
			$this->getService('07'),
			$this->getService('055')
		);
	}


	public function createService077(): Packetery\Module\Options\Exporter
	{
		return new Packetery\Module\Options\Exporter(
			$this->getService('082'),
			$this->getService('latteEngine'),
			$this->getService('048'),
			$this->getService('optionsProvider'),
			$this->getService('014'),
			$this->getService('010'),
			$this->getService('01'),
			$this->getService('02')
		);
	}


	public function createService078(): Packetery\Module\Order\CollectionPrint
	{
		return new Packetery\Module\Order\CollectionPrint(
			$this->getService('latteEngine'),
			$this->getService('082'),
			$this->getService('054'),
			$this->getService('023'),
			$this->getService('09'),
			$this->getService('050'),
			$this->getService('056'),
			$this->getService('0112')
		);
	}


	public function createService079(): Packetery\Module\Order\PacketSynchronizer
	{
		return new Packetery\Module\Order\PacketSynchronizer(
			$this->getService('054'),
			$this->getService('014'),
			$this->getService('optionsProvider'),
			$this->getService('050'),
			$this->getService('0103'),
			$this->getService('02')
		);
	}


	public function createService080(): Packetery\Module\Order\PacketAutoSubmitter
	{
		return new Packetery\Module\Order\PacketAutoSubmitter(
			$this->getService('optionsProvider'),
			$this->getService('057'),
			$this->getService('050')
		);
	}


	public function createService081(): Packetery\Nette\Http\RequestFactory
	{
		return new Packetery\Nette\Http\RequestFactory;
	}


	public function createService082(): Packetery\Nette\Http\Request
	{
		return $this->getService('requestFactory')->createHttpRequest();
	}


	public function createService083(): Packetery\Module\Upgrade
	{
		return new Packetery\Module\Upgrade(
			$this->getService('050'),
			$this->getService('023'),
			$this->getService('014'),
			$this->getService('013'),
			$this->getService('032'),
			$this->getService('030'),
			$this->getService('069'),
			$this->getService('optionsProvider'),
			$this->getService('092')
		);
	}


	public function createService084(): Packetery\Module\Upgrade\Version_1_4_2
	{
		return new Packetery\Module\Upgrade\Version_1_4_2($this->getService('032'));
	}


	public function createService085(): Packetery\Module\QueryProcessor
	{
		return new Packetery\Module\QueryProcessor($this->getService('082'), $this->getService('050'), $this->getService('07'));
	}


	public function createService086(): Packetery\Module\WeightCalculator
	{
		return new Packetery\Module\WeightCalculator($this->getService('optionsProvider'));
	}


	public function createService087(): Packetery\Module\Checkout\CurrencySwitcherService
	{
		return new Packetery\Module\Checkout\CurrencySwitcherService($this->getService('01'), $this->getService('010'));
	}


	public function createService088(): Packetery\Core\Api\Soap\CreatePacketMapper
	{
		return new Packetery\Core\Api\Soap\CreatePacketMapper($this->getService('021'), $this->getService('031'), '51770072f717b057');
	}


	public function createService089(): Packetery\Module\Order\PickupPointValidator
	{
		return new Packetery\Module\Order\PickupPointValidator(
			$this->getService('optionsProvider'),
			$this->getService('014'),
			$this->getService('022'),
			$this->getService('01')
		);
	}


	public function createService090(): Packetery\Module\Checkout\RateCalculator
	{
		return new Packetery\Module\Checkout\RateCalculator($this->getService('01'), $this->getService('02'), $this->getService('087'));
	}


	public function createService091(): Packetery\Module\Carrier\PacketaPickupPointsConfig
	{
		return new Packetery\Module\Carrier\PacketaPickupPointsConfig(
			$this->getService('096'),
			$this->getService('097'),
			$this->getService('098')
		);
	}


	public function createService092(): Packetery\Module\Carrier\EntityRepository
	{
		return new Packetery\Module\Carrier\EntityRepository(
			$this->getService('030'),
			$this->getService('059'),
			$this->getService('091'),
			$this->getService('034'),
			$this->getService('031'),
			$this->getService('093')
		);
	}


	public function createService093(): Packetery\Module\Carrier\CarrierActivityBridge
	{
		return new Packetery\Module\Carrier\CarrierActivityBridge($this->getService('optionsProvider'));
	}


	public function createService094(): Packetery\Module\Order\AttributeMapper
	{
		return new Packetery\Module\Order\AttributeMapper;
	}


	public function createService095(): Packetery\Module\WidgetOptionsBuilder
	{
		return new Packetery\Module\WidgetOptionsBuilder($this->getService('091'), $this->getService('098'));
	}


	public function createService096(): Packetery\Core\PickupPointProvider\CompoundCarrierCollectionFactory
	{
		return new Packetery\Core\PickupPointProvider\CompoundCarrierCollectionFactory;
	}


	public function createService097(): Packetery\Core\PickupPointProvider\VendorCollectionFactory
	{
		return new Packetery\Core\PickupPointProvider\VendorCollectionFactory;
	}


	public function createService098(): Packetery\Module\Options\FlagManager\FeatureFlagProvider
	{
		return new Packetery\Module\Options\FlagManager\FeatureFlagProvider($this->getService('01'));
	}


	public function createService099(): Packetery\Module\Options\FlagManager\FeatureFlagNotice
	{
		return new Packetery\Module\Options\FlagManager\FeatureFlagNotice(
			$this->getService('latteEngine'),
			$this->getService('010'),
			$this->getService('01')
		);
	}


	public function createService0100(): Packetery\Module\Options\FlagManager\FeatureFlagDownloader
	{
		return new Packetery\Module\Options\FlagManager\FeatureFlagDownloader(
			'https://pes-features-prod-pes.prod.packeta-com.codenow.com/v1/wp',
			$this->getService('optionsProvider'),
			$this->getService('01'),
			$this->getService('02'),
			$this->getService('0101')
		);
	}


	public function createService0101(): Packetery\Module\Options\FlagManager\FeatureFlagStorage
	{
		return new Packetery\Module\Options\FlagManager\FeatureFlagStorage;
	}


	public function createService0102(): Packetery\Module\Options\TransientPurger
	{
		return new Packetery\Module\Options\TransientPurger($this->getService('068'));
	}


	public function createService0103(): Packetery\Module\Order\WcOrderActions
	{
		return new Packetery\Module\Order\WcOrderActions(
			$this->getService('014'),
			$this->getService('optionsProvider'),
			$this->getService('050')
		);
	}


	public function createService0104(): Packetery\Module\ShippingZoneRepository
	{
		return new Packetery\Module\ShippingZoneRepository($this->getService('02'));
	}


	public function createService0105(): Packetery\Module\Forms\StoredUntilFormFactory
	{
		return new Packetery\Module\Forms\StoredUntilFormFactory($this->getService('046'));
	}


	public function createService0106(): Packetery\Module\Order\StoredUntilModal
	{
		return new Packetery\Module\Order\StoredUntilModal(
			$this->getService('latteEngine'),
			$this->getService('0105'),
			$this->getService('071')
		);
	}


	public function createService0107(): Packetery\Module\Order\PacketSetStoredUntil
	{
		return new Packetery\Module\Order\PacketSetStoredUntil(
			$this->getService('054'),
			$this->getService('014'),
			$this->getService('021')
		);
	}


	public function createService0108(): Packetery\Module\Hooks\HookRegistrar
	{
		return new Packetery\Module\Hooks\HookRegistrar(
			$this->getService('0110'),
			$this->getService('023'),
			$this->getService('035'),
			$this->getService('049'),
			$this->getService('051'),
			$this->getService('053'),
			$this->getService('017'),
			$this->getService('074'),
			$this->getService('075'),
			$this->getService('077'),
			$this->getService('078'),
			$this->getService('050'),
			$this->getService('083'),
			$this->getService('085'),
			$this->getService('optionsProvider'),
			$this->getService('016'),
			$this->getService('047'),
			$this->getService('057'),
			$this->getService('020'),
			$this->getService('080'),
			$this->getService('03'),
			$this->getService('052'),
			$this->getService('076'),
			$this->getService('0111'),
			$this->getService('05'),
			$this->getService('0106'),
			$this->getService('0109'),
			$this->getService('0113'),
			$this->getService('0114'),
			$this->getService('0115'),
			$this->getService('0116'),
			$this->getService('045'),
			$this->getService('015'),
			$this->getService('027'),
			$this->getService('01'),
			$this->getService('079'),
			$this->getService('039'),
			$this->getService('010'),
			$this->getService('0117')
		);
	}


	public function createService0109(): Packetery\Module\Blocks\BlockHooks
	{
		return new Packetery\Module\Blocks\BlockHooks($this->getService('039'), $this->getService('01'), $this->getService('02'));
	}


	public function createService0110(): Packetery\Module\Hooks\PluginHooks
	{
		return new Packetery\Module\Hooks\PluginHooks(
			$this->getService('082'),
			$this->getService('098'),
			$this->getService('057'),
			$this->getService('08'),
			$this->getService('058'),
			$this->getService('010'),
			$this->getService('01'),
			$this->getService('02')
		);
	}


	public function createService0111(): Packetery\Module\Hooks\UpdateOrderHook
	{
		return new Packetery\Module\Hooks\UpdateOrderHook($this->getService('03'), $this->getService('050'));
	}


	public function createService0112(): Packetery\Module\Views\UrlBuilder
	{
		return new Packetery\Module\Views\UrlBuilder($this->getService('01'));
	}


	public function createService0113(): Packetery\Module\Views\ViewAdmin
	{
		return new Packetery\Module\Views\ViewAdmin(
			$this->getService('07'),
			$this->getService('latteEngine'),
			$this->getService('01'),
			$this->getService('050'),
			$this->getService('031'),
			$this->getService('010')
		);
	}


	public function createService0114(): Packetery\Module\Views\ViewFrontend
	{
		return new Packetery\Module\Views\ViewFrontend(
			$this->getService('050'),
			$this->getService('latteEngine'),
			$this->getService('055'),
			$this->getService('01')
		);
	}


	public function createService0115(): Packetery\Module\Views\ViewMail
	{
		return new Packetery\Module\Views\ViewMail(
			$this->getService('050'),
			$this->getService('latteEngine'),
			$this->getService('055'),
			$this->getService('01')
		);
	}


	public function createService0116(): Packetery\Module\Views\AssetManager
	{
		return new Packetery\Module\Views\AssetManager(
			$this->getService('07'),
			$this->getService('098'),
			$this->getService('099'),
			$this->getService('024'),
			$this->getService('082'),
			$this->getService('039'),
			$this->getService('01'),
			$this->getService('02'),
			$this->getService('036')
		);
	}


	public function createService0117(): Packetery\Module\Shipping\ShippingProvider
	{
		return new Packetery\Module\Shipping\ShippingProvider(
			$this->getService('098'),
			$this->getService('091'),
			$this->getService('034'),
			$this->getService('07'),
			$this->getService('0104'),
			$this->getService('092'),
			$this->getService('031')
		);
	}


	public function createService0118(): Packetery\Module\Shipping\ShippingMethodGenerator
	{
		return new Packetery\Module\Shipping\ShippingMethodGenerator($this->getService('091'), $this->getService('028'));
	}


	public function createServiceContainer(): Container_10fc08cdc1
	{
		return $this;
	}


	public function createServiceLatteEngine(): Packetery\Latte\Engine
	{
		return $this->getService('latteEngineFactory')->create('/var/www/html/wp-content/plugins/packeta/temp/cache/view');
	}


	public function createServiceLatteEngineFactory(): Packetery\Module\LatteEngineFactory
	{
		return new Packetery\Module\LatteEngineFactory;
	}


	public function createServiceOptionsProvider(): Packetery\Module\Options\OptionsProvider
	{
		return new Packetery\Module\Options\OptionsProvider;
	}


	public function createServiceRequestFactory(): Packetery\Module\HttpRequestFactory
	{
		return new Packetery\Module\HttpRequestFactory(
			false,
			$this->getParameter('disableGetPostCookieParsing'),
			$this->getService('081')
		);
	}


	public function createServiceWpdbAdapterFactory(): Packetery\Module\WpdbAdapterFactory
	{
		return new Packetery\Module\WpdbAdapterFactory;
	}


	public function initialize(): void
	{
	}


	protected function getStaticParameters(): array
	{
		return [
			'latteTempFolder' => '/var/www/html/wp-content/plugins/packeta/temp/cache/view',
			'surveyConfig' => [
				'active' => true,
				'validTo' => new \DateTimeImmutable('2023-03-31 23:59:59.000000', new \DateTimeZone('UTC')),
				'url' => 'https://forms.office.com/e/2YjCu9ZEt0',
			],
			'carDeliveryConfig' => ['sample' => false, 'enabled' => false],
			'featureFlagConfig' => ['url' => 'https://pes-features-prod-pes.prod.packeta-com.codenow.com/v1/wp'],
			'wsdlUrl' => 'http://www.zasilkovna.cz/api/soap-php-bugfix.wsdl',
			'trackingUrl' => 'https://tracking.packeta.com/Z%s',
			'supportEmailAddress' => 'e-commerce.support@packeta.com',
			'affiliateId' => '51770072f717b057',
			'appDir' => '/var/www/html/wp-content/plugins/packeta',
			'wwwDir' => '/var/www/html/wp-admin',
			'vendorDir' => null,
			'debugMode' => false,
			'productionMode' => true,
			'consoleMode' => false,
			'tempDir' => '/var/www/html/wp-content/plugins/packeta/temp',
		];
	}


	protected function getDynamicParameter($key)
	{
		switch (true) {
			case $key === 'disableGetPostCookieParsing': return null;
			default: return parent::getDynamicParameter($key);
		};
	}


	public function getParameters(): array
	{
		array_map([$this, 'getParameter'], ['disableGetPostCookieParsing']);
		return parent::getParameters();
	}
}

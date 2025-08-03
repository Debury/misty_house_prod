<?php

use \Packetery\Latte\Runtime as LR;

/** source: /var/www/html/wp-content/plugins/packeta/template/options/page-tabs/general.latte */
final class Templatebf1a209d26 extends \Packetery\Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		settings_errors() /* line 1 */;
		echo "\n";
		$form = $this->global->formsStack[] = is_object($form) ? $form : $this->global->uiControl[$form] /* line 3 */;
		echo '<form';
		echo \Packetery\Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), [], false);
		echo '>
	';
		settings_fields('packetery') /* line 4 */;
		echo '

	<table class="form-table packetery_settings" role="presentation">
		<tr>
			<th scope="row">
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-api_password"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 9 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 9 */;
		echo '</label>
			</th>
			<td>
				<input';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-api_password"];
		echo $ʟ_input->getControlPart()->attributes() /* line 12 */;
		echo '>
				<div class="packetery-help-block">
					<p>
						';
		echo sprintf( $translations['apiPasswordCanBeFoundAt%sUrl'], $apiPasswordLink ) /* line 15 */;
		echo '
					</p>
				</div>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-sender"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 22 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 22 */;
		echo '</label>
			</th>
			<td>
				<input';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-sender"];
		echo $ʟ_input->getControlPart()->attributes() /* line 25 */;
		echo '>
				<div class="packetery-help-block">
					<p>
						';
		echo $translations['senderDescription'] /* line 28 */;
		echo '
					</p>
				</div>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-packeta_label_format"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 35 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 35 */;
		echo '</label>
			</th>
			<td>
				<select';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-packeta_label_format"];
		echo $ʟ_input->getControlPart()->attributes() /* line 38 */;
		echo '>';
		echo $ʟ_input->getControl()->getHtml() /* line 38 */;
		echo '</select>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-carrier_label_format"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 43 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 43 */;
		echo '</label>
			</th>
			<td>
				<select';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-carrier_label_format"];
		echo $ʟ_input->getControlPart()->attributes() /* line 46 */;
		echo '>';
		echo $ʟ_input->getControl()->getHtml() /* line 46 */;
		echo '</select>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-cod_payment_methods"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 51 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 51 */;
		echo '</label>
			</th>
			<td>
				<select data-packetery-select2';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-cod_payment_methods"];
		echo $ʟ_input->getControlPart()->addAttributes(['data-packetery-select2' => null])->attributes() /* line 54 */;
		echo '>';
		echo $ʟ_input->getControl()->getHtml() /* line 54 */;
		echo '</select>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-packaging_weight"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 59 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 59 */;
		echo '</label>
			</th>
			<td>
				<input type="number" step="0.001"';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-packaging_weight"];
		echo $ʟ_input->getControlPart()->addAttributes(['type' => null, 'step' => null])->attributes() /* line 62 */;
		echo '>
				<div class="packetery-help-block">
					<p>
						';
		echo LR\Filters::escapeHtmlText($translations['packagingWeightDescription']) /* line 65 */;
		echo '
					</p>
				</div>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-default_weight_enabled"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 72 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 72 */;
		echo '</label>
			</th>
			<td>
				<input';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-default_weight_enabled"];
		echo $ʟ_input->getControlPart()->attributes() /* line 75 */;
		echo '>
			</td>
		</tr>
		<tr id="packetery-default-weight-value">
			<th scope="row">
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-default_weight"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 80 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 80 */;
		echo '</label>
			</th>
			<td>
				<input';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-default_weight"];
		echo $ʟ_input->getControlPart()->attributes() /* line 83 */;
		echo '>
				<div class="packetery-help-block">
					<p>
						';
		echo LR\Filters::escapeHtmlText($translations['defaultWeightDescription']) /* line 86 */;
		echo '
					</p>
				</div>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-dimensions_unit"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 93 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 93 */;
		echo '</label>
			</th>
			<td>
				<select';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-dimensions_unit"];
		echo $ʟ_input->getControlPart()->attributes() /* line 96 */;
		echo '>';
		echo $ʟ_input->getControl()->getHtml() /* line 96 */;
		echo '</select>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-default_dimensions_enabled"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 101 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 101 */;
		echo '</label>
			</th>
			<td>
				<input';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-default_dimensions_enabled"];
		echo $ʟ_input->getControlPart()->attributes() /* line 104 */;
		echo '>
			</td>
		</tr>
		<tr id="packetery-default-dimensions-value">
			<th scope="row">
				<label>';
		echo LR\Filters::escapeHtmlText($translations['dimensionsLabel']) /* line 109 */;
		echo '</label>
			</th>
			<td class="packetery-dimensions-block">
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-default_length"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 112 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 112 */;
		echo '</label>
				<input';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-default_length"];
		echo $ʟ_input->getControlPart()->attributes() /* line 113 */;
		echo '>
				<br>
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-default_width"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 115 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 115 */;
		echo '</label>
				<input';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-default_width"];
		echo $ʟ_input->getControlPart()->attributes() /* line 116 */;
		echo '>
				<br>
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-default_height"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 118 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 118 */;
		echo '</label>
				<input';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-default_height"];
		echo $ʟ_input->getControlPart()->attributes() /* line 119 */;
		echo '>
				<br>
				<div class="packetery-help-block">
					<p>';
		echo LR\Filters::escapeHtmlText($translations['defaultDimensionsDescription']) /* line 122 */;
		echo '</p>
				</div>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-replace_shipping_address_with_pickup_point_address"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 128 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 128 */;
		echo '</label>
			</th>
			<td>
				<input';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-replace_shipping_address_with_pickup_point_address"];
		echo $ʟ_input->getControlPart()->attributes() /* line 131 */;
		echo '>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-checkout_detection"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 136 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 136 */;
		echo '</label>
			</th>
			<td>
				<select';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-checkout_detection"];
		echo $ʟ_input->getControlPart()->attributes() /* line 139 */;
		echo '>';
		echo $ʟ_input->getControl()->getHtml() /* line 139 */;
		echo '</select>
				<div class="packetery-help-block">
					<p>
						';
		echo LR\Filters::escapeHtmlText($translations['setCheckoutDetectionDescription']) /* line 142 */;
		echo '
					</p>
				</div>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-checkout_widget_button_location"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 149 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 149 */;
		echo '</label>
			</th>
			<td>
				<select';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-checkout_widget_button_location"];
		echo $ʟ_input->getControlPart()->attributes() /* line 152 */;
		echo '>';
		echo $ʟ_input->getControl()->getHtml() /* line 152 */;
		echo '</select>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-email_hook"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 157 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 157 */;
		echo '</label>
			</th>
			<td>
				<select';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-email_hook"];
		echo $ʟ_input->getControlPart()->attributes() /* line 160 */;
		echo '>';
		echo $ʟ_input->getControl()->getHtml() /* line 160 */;
		echo '</select>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-force_packet_cancel"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 165 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 165 */;
		echo '</label>
			</th>
			<td>
				<input';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-force_packet_cancel"];
		echo $ʟ_input->getControlPart()->attributes() /* line 168 */;
		echo '>
				<div class="packetery-help-block">
					<p>
						';
		echo LR\Filters::escapeHtmlText($forcePacketCancelDescription) /* line 171 */;
		echo '
					</p>
				</div>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-widget_auto_open"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 178 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 178 */;
		echo '</label>
			</th>
			<td>
				<input';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-widget_auto_open"];
		echo $ʟ_input->getControlPart()->attributes() /* line 181 */;
		echo '>
				<div class="packetery-help-block">
					<p>
						';
		echo LR\Filters::escapeHtmlText($translations['widgetAutoOpenDescription']) /* line 184 */;
		echo '
					</p>
				</div>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-free_shipping_shown"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 191 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 191 */;
		echo '</label>
			</th>
			<td>
				<input';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-free_shipping_shown"];
		echo $ʟ_input->getControlPart()->attributes() /* line 194 */;
		echo '>
				<div class="packetery-help-block">
					<p>
						';
		echo LR\Filters::escapeHtmlText($translations['freeShippingTextDescription']) /* line 197 */;
		echo '
					</p>
				</div>
			</td>
		</tr>
		<tr>
			<th scope="row">
				<label';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-prices_include_tax"];
		echo $ʟ_input->getLabelPart()->attributes() /* line 204 */;
		echo '>';
		echo $ʟ_input->getLabelPart()->getHtml() /* line 204 */;
		echo '</label>
			</th>
			<td>
				<input';
		$ʟ_input = $_input = end($this->global->formsStack)["packetery-prices_include_tax"];
		echo $ʟ_input->getControlPart()->attributes() /* line 207 */;
		echo '>
			</td>
		</tr>
	</table>
	<p class="submit">
		<button class="button button-primary"';
		$ʟ_input = $_input = end($this->global->formsStack)["save"];
		echo $ʟ_input->getControlPart()->addAttributes(['class' => null])->attributes() /* line 212 */;
		echo '>';
		echo LR\Filters::escapeHtmlText($translations['saveChanges']) /* line 212 */;
		echo '</button>
';
		if ($canValidateSender) /* line 213 */ {
			echo '			<a href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($senderValidationLink)) /* line 214 */;
			echo '" class="button">';
			echo LR\Filters::escapeHtmlText($translations['validateSender']) /* line 214 */;
			echo '</a>
';
		}
		echo '	</p>
';
		echo \Packetery\Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack), false) /* line 3 */;
		echo '</form>
';
		return get_defined_vars();
	}

}

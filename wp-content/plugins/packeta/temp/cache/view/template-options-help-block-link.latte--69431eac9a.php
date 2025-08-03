<?php

use \Packetery\Latte\Runtime as LR;

/** source: /var/www/html/wp-content/plugins/packeta/template/options/help-block-link.latte */
final class Template69431eac9a extends \Packetery\Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<a target="_blank" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($href)) /* line 1 */;
		echo '">';
		echo LR\Filters::escapeHtmlText($href) /* line 1 */;
		echo '</a>
';
		return get_defined_vars();
	}

}

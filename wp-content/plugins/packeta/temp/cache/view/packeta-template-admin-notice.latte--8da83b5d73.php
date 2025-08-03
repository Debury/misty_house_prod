<?php

use \Packetery\Latte\Runtime as LR;

/** source: /var/www/html/wp-content/plugins/packeta/template/admin-notice.latte */
final class Template8da83b5d73 extends \Packetery\Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<div class="notice notice-';
		echo LR\Filters::escapeHtmlAttr($message['type']) /* line 1 */;
		echo ' is-dismissible">
	<p>
';
		if (( $message['escape'] ?? true ) === false) /* line 3 */ {
			echo '			';
			echo $message['message'] /* line 4 */;
			echo "\n";
		} else /* line 5 */ {
			echo '			';
			echo LR\Filters::escapeHtmlText($message['message']) /* line 6 */;
			echo "\n";
		}
		echo '	</p>
</div>
';
		return get_defined_vars();
	}

}

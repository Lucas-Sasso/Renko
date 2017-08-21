<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'hotsite-renko');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'updvX}=0ah[#SGP9[=ovSqu[D=3&_/&$z8id#8MwktHjwip9viswaAUcA{Hno;_A');
define('SECURE_AUTH_KEY',  '$N@9ZW`Z-WLXlgI^`ASKV92m/xZBDUpEcsNMX$n.nEJ:@;G`v~i?gyh6`HF`L/mE');
define('LOGGED_IN_KEY',    '_2y5uEa<~rd#?H*jDM:)@jG%kg]Jn&-J{<m`0Tc0(MN5Px{l0h}%`V{T|Kb#@$uS');
define('NONCE_KEY',        '-)DcK7g2~S_:rd,HP)At28cy:PTGZ$@SO`tiEd0K:_~N0IQc4Hcj2!Cc4_N/0M#P');
define('AUTH_SALT',        'yu1@J831ma-I&aeW$9b1kGzC#/aJ|e}%?74&rbu`<^5}`cDD])w/?UXe`7o@EY0c');
define('SECURE_AUTH_SALT', '#*!-@SuD&QdmHf*9F |nZLyl%#k~ZCDoBsocUu.)K1RO-gN#I|yn8TUN#-K)%BlS');
define('LOGGED_IN_SALT',   'DD<_{l<!jV)[zUgD(3)j`tf0<2o?YBAkC^.Z=Bef@R6{.%xg4qi|3I}*CNS%|B*x');
define('NONCE_SALT',       ';4Rv<<.E`k}4e(>+[*MJ+pF)Y1vMJ|l-.8W^SQ{pf9 o/d^>K9P`U]R[4X&z`_s[');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

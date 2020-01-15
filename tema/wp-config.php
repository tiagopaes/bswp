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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bswp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'password' );

/** Nome do host do MySQL */
define( 'DB_HOST', '127.0.0.1:3306' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '^kQhpIJI_1[6,,%7uBQr}ka&LpO10!Gas<LQ`fyx?3wVHE*L|&NCU6BpIkYoGRo9' );
define( 'SECURE_AUTH_KEY',  ':Rj=OA;P6KQ{`4UG+1RXHsePN=W;dZRQlL2sdHX[WM)IAz)E}bR?z]ymT#pC[byt' );
define( 'LOGGED_IN_KEY',    '5y:0u:~#l*CMs- D/TK9!AKz^r?#P;c;xmQ.4+BJ9O#d;,pm7?UTl5Sn>`rWT|bX' );
define( 'NONCE_KEY',        'S%z_SPGp~Y;?U`BWCD4MI@^Q{D^j-W-%j+L=&=:2n#GM;r%Ob26:zVPg&:Hi5t3r' );
define( 'AUTH_SALT',        'x<_HX=O)z^I^ujzS@J1p`xQ(en.[qR|.#[1`oA+91?/;U]8kiWaPmWQ$>kO0/R8*' );
define( 'SECURE_AUTH_SALT', '>!eAL9f1;6MdV@:6**HU&8jr0Fj>NAE.:I`{iQz t>?|(eICFe]GOgPi^6Tnfn3#' );
define( 'LOGGED_IN_SALT',   'd?oHK?-gOVDwk2NF8yp:rQH6QxI?LU!XCEp}{aY7$2~)VI~zZl9{tn6(h!KF4P %' );
define( 'NONCE_SALT',       'mz$e##bTef<3Yfa@LU-*1bV*3)3B3f7VkNQuD~ePRux3f0}vTi34Q<aA4WoQ/ThU' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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

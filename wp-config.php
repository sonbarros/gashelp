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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp_helpgas' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'app_wp_helpgas' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'gaS**16mai' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'andrin-db2.cpl3ueimn38n.us-east-2.rds.amazonaws.com' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '2&P$_fXBE1YRBT*hSx=R+swFW<|=Il?1xbHymf)S}SlWZ)Aj[oPEV@QgeKC%n_XT' );
define( 'SECURE_AUTH_KEY',  '!MviR1gvv/!=v@k2]a+%7D`w3d%;]o2<?i^l@t<*?hCGH56n*x[25HG$GbL{UT{{' );
define( 'LOGGED_IN_KEY',    'T^5|:`(4pvh0mL_t%kOdGf|f{$xDsrBB_s`rzHAU#|0V=e+*BSwyVc=xIXCM@ 0d' );
define( 'NONCE_KEY',        'ta&|/uLY:rv]!XhV7XrP(^X}|/A}i*N+piOZxM5#0?5=PwbathJBV73Z)?->0{dH' );
define( 'AUTH_SALT',        'sww@[K250] {]=L2=IUjld;+B$/_fwO[>;`cJXFu6:z|{Z2_ p}a^y%r(z*z}Bx2' );
define( 'SECURE_AUTH_SALT', '=z2;)dB]QI `T/quP1v,.nx7^IJu]xqo^V2/#pvmAX_H7%J&#{[||Y 3vd_8IiHb' );
define( 'LOGGED_IN_SALT',   '?Y[+K5(1$G0YN!US==cj7^ah@pqn:rlM:t`4tc5n^NL:Ka]pwUYLGI(Rl as8nYK' );
define( 'NONCE_SALT',       'ydK)#ef.z+e1C{Z`q,Cv#lE-!,@)C1q^zs`B{+w(8G(PuZhXUVaKy-_bT4w#s{6/' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

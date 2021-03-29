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
define( 'DB_NAME', 'SmartIn' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'M*i)jg<y=HV71PEZ{p6=xPpIO8xmWSeE*{)0u41h^H(6a0wsaWH&qm>e,S]D|;4t' );
define( 'SECURE_AUTH_KEY',  'YgyT;[M?4Kq[tv;6I%#az1)VB&IlkwgCG;uwXwZNBvq _NCs7%8tj$9:FDzFiy9d' );
define( 'LOGGED_IN_KEY',    '&N8DT537/b0U]07K2^f+rpn|eQUCxqCT(mwba-Ihk[jneN5Q&cvy{F3{PS0dioB<' );
define( 'NONCE_KEY',        'LKfvYtx{~BF3([Y.)I:YWbY}g&PyEW;f.O</}UcFEeU]$Z..0c&tvM>xH^qM|J?w' );
define( 'AUTH_SALT',        '` P-5K|,vbBv`R6n++SFI<vxMr@oF?aP3EzI?4DxTG{?8q=8%)eCK_/~o%q|91~E' );
define( 'SECURE_AUTH_SALT', '>At+beffO]4{a]MqR?/8OWoi3t%{+zB]6XJLU&CdKB|3urH0DQ9|!@I?1g8yrzf+' );
define( 'LOGGED_IN_SALT',   'G5XTW^5A7kgpbZEDc>{DZpr9>Aq[}]/;}WejMPFhr#^YaL;v9wd{N/Tfe==pKNjC' );
define( 'NONCE_SALT',       'b{-lK)Ow{,jS^&56QdC:*v7!~JanWU];-)SU;g |Ujg[4imc2+qW4W[BTEdHu8TN' );

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

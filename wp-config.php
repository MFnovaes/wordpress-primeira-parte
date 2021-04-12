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
define( 'DB_NAME', 'wp_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wp_user' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'V(NEI)7 R_]nISK[`c<YoZX/N?V#SUnlpbC,[1!FEWkqJ5nbr8A11SD88DU&o9i4' );
define( 'SECURE_AUTH_KEY',  'mOP>ukL62`k8L|s[M@2@Gn7rqo!b $/M,_lkE1[Px,Sus8X>fru?!`Y,W4r.+=@q' );
define( 'LOGGED_IN_KEY',    'qI5|b-Y<5vDwFx)LLaJE>JwmmWS{>*]41:kiaEM?>Rr0lY/3,)!1{xKg^!nfcH^$' );
define( 'NONCE_KEY',        ')&+wN<#[KYXQ.`1@K]5JZuF/bAJ~VI,F z5YPC_8Nh<sj*x@`Jm+Z})j}KgXc?9o' );
define( 'AUTH_SALT',        '&91Ijk]PEFd#XI1_*xbO<lzJt q@-Dv.CT`U$ 7w2L`ke7Hj8`b3!L!JX96ALLOl' );
define( 'SECURE_AUTH_SALT', '1jop#u&><KVEqXTt,OlNP*3Q^{ob1*$5von4#/cO2euUB{/L<VS,7QxE[XEXh:sb' );
define( 'LOGGED_IN_SALT',   '@*c~lgJ}:*-]|RyF,|>975T|F8vzE^?n xOXfF#AxKqe,nx.L3P}E)Q$mFPr1 R3' );
define( 'NONCE_SALT',       '-e|QUP-41|+Gw(s<[g$&Y8kNuZa4(qi&O/-SG9j((~%ZWVU|24-=PP&A.Z]C)|xG' );

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

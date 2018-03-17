# Add columns for Bootstrap
CREATE TABLE tt_content (
	bootstrap_col_xs int(11) DEFAULT '0' NOT NULL,
	bootstrap_col_sm int(11) DEFAULT '0' NOT NULL,
	bootstrap_col_md int(11) DEFAULT '0' NOT NULL,
	bootstrap_col_lg int(11) DEFAULT '0' NOT NULL,
	bootstrap_css_outer varchar(255) NOT NULL DEFAULT '',
	bootstrap_css_inner varchar(255) NOT NULL DEFAULT '',
	disable_div_wrapper tinyint(1) unsigned DEFAULT '0' NOT NULL,

	animation_type varchar(30) NOT NULL DEFAULT '',
	animation_delay decimal(3,2) DEFAULT '0.00',
	animation_speed int(11) DEFAULT '0' NOT NULL,
	animation_offset varchar(4) NOT NULL DEFAULT '90%',

	header_style varchar(255) NOT NULL DEFAULT '',
	table_css varchar(255) NOT NULL DEFAULT '',
	button_text varchar(255) default ''

);

# todo canonical, og:, ...
CREATE TABLE pages (
	enable_social_share_buttons tinyint(4) NOT NULL default '0',
	disable_breadcrumb tinyint(4) DEFAULT '0' NOT NULL,
	canonical_url varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE pages_language_overlay (
	canonical_url varchar(255) NOT NULL DEFAULT ''
);

<?php

function fooauth_create_settings() {

  //region LDAP Tab
  $tabs['general'] = __('General', 'fooauth');

  //region Service Account
  $sections['service_account'] = array(
    'tab' => 'general',
    'name' => __('Service Account', 'fooauth')
  );

  $settings[] = array(
    'id' => 'ldap_username',
    'title' => __('Username', 'fooauth'),
    'type' => 'text',
    'section' => 'service_account',
    'tab' => 'general'
  );
  $settings[] = array(
    'id' => 'ldap_password',
    'title' => __('Password', 'fooauth'),
    'type' => 'password',
    'section' => 'service_account',
    'tab' => 'general'
  );
  $settings[] = array(
    'id' => 'ldap_fqdn',
    'title' => __('FQDN', 'fooauth'),
    'desc' => __('Fully qualified domain name. Eg. fooplugins.com', 'fooauth'),
    'type' => 'text',
    'section' => 'service_account',
    'tab' => 'general'
  );
  //endregion

  //region Domain Controller
  $sections['domain_controller'] = array(
    'tab' => 'general',
    'name' => __('Domain Controller', 'fooauth')
  );
  $settings[] = array(
    'id' => 'ldap_domain_controllers',
    'title' => __('Domain Controllers', 'fooauth'),
    'type' => 'text',
    'desc' => __('Comma separated list of domain controllers. Eg. ADCONTROL1,ADCONTROL2,ADCONTROL5', 'fooauth'),
    'section' => 'domain_controller',
    'tab' => 'general'
  );
  $settings[] = array(
    'id' => 'ldap_port',
    'title' => __('Port', 'fooauth'),
    'type' => 'text',
    'default' => '389',
    'section' => 'domain_controller',
    'tab' => 'general'
  );
  $settings[] = array(
    'id' => 'ldap_tls',
    'title' => __('Use TLS', 'fooauth'),
    'type' => 'checkbox',
    'desc' => __('Secure connection between Wordpress and AD servers. NOTE : To use TLS, the port must be set to 389', 'fooauth'),
    'section' => 'domain_controller',
    'tab' => 'general'
  );
  $settings[] = array(
    'id' => 'ldap_organizational_unit',
    'title' => __('Organizational Unit', 'fooauth'),
    'type' => 'text',
    'desc' => __('Base DN Eg. DC=sub,DC=domain,DC=com', 'fooauth'),
    'section' => 'domain_controller',
    'tab' => 'general'
  );
  $settings[] = array(
    'id' => 'ldap_network_timeout',
    'title' => __('Network Timeout', 'fooauth'),
    'type' => 'text',
    'section' => 'domain_controller',
    'tab' => 'general'
  );

  //endregion

  //region Single Signon
  $sections['single_signon'] = array(
    'tab' => 'general',
    'name' => __('Single Sign-On', 'fooauth')
  );
  $settings[] = array(
    'id' => 'ldap_single_signon',
    'title' => __('Enable Single Sign-On', 'fooauth'),
    'type' => 'checkbox',
    'section' => 'single_signon',
    'tab' => 'general'
  );
  $settings[] = array(
    'id' => 'authentication_mixed_auth',
    'title' => __('Enable Mixed Authentication', 'fooauth'),
    'type' => 'checkbox',
    'desc' => __('Allow users to log out and back in with a different username and password','fooauth'),
    'section' => 'single_signon',
    'tab' => 'general'
  );
  //endregion

  //region User Setting
  $sections['user_setting'] = array(
    'tab' => 'general',
    'name' => __("User", "fooauth")
  );
  $settings[] = array(
    'id' => 'display_name',
    'title' => __('User Display Name', 'fooauth'),
    'type' => 'select',
    'choices' => array(
      'samaccountname' => __('Username', 'fooauth'),
      'displayName' => __('Display Name', 'fooauth'),
      'description' => __('Description', 'fooauth'),
      'givenname' => __('First Name', 'fooauth'),
      'sn' => __('Surname', 'fooauth'),
      'givenname sn' => __('First Name - Surname', 'fooauth'),
      'cn' => __('Fullname', 'fooauth'),
      'mail' => __('Email Address', 'fooauth')
    ),
    'default' => 'displayName',
    'desc' => __('The name that is shown when the user is logged in','fooauth'),
    'section' => 'user_setting',
    'tab' => 'general'
  );
  $settings[] = array(
    'id' => 'default_role',
    'title' => __('Default Role', 'fooauth'),
    'type' => 'select',
    'choices' => array(
      'admin' => __('Admin', 'fooauth'),
      'pending' => __('Pending', 'fooauth'),
      'subscriber' => __('Subscriber', 'fooauth'),
      'editor' => __('Editor', 'fooauth'),
      'contributor' => __('Contributor', 'fooauth')
    ),
    'default' => 'pending',
    'desc' => __('Default role new accounts should be assigned to', 'fooauth'),
    'section' => 'user_setting',
    'tab' => 'general'
  );
  $settings[] = array(
    'id' => 'auto_user_updates',
    'title' => __('Update Users', 'fooauth'),
    'type' => 'checkbox',
    'desc' => __('Automatically update users details when they login','fooauth'),
    'section' => 'user_setting',
    'default' => 'on',
    'tab' => 'general'
  );
  //endregion

  //region Security Settings
  $sections['security_settings'] = array(
    'tab' => 'general',
    'name' => __('Security Options', 'fooauth')
  );
  $settings[] = array(
    'id' => 'authorized_groups',
    'title' => __('Authorized Groups', 'fooauth'),
    'type' => 'text',
    'desc' => __('Comma separated list of groups to restrict site access', 'fooauth'),
    'section' => 'security_settings',
    'tab' => 'general'
  );
  //endregion

  //endregion

  return array(
    'tabs' => $tabs,
    'sections' => $sections,
    'settings' => $settings
  );
}
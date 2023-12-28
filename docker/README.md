# WoWSimpleRegistration Docker Image

[![Docker](https://github.com/CerberusGaming/WoWSimpleRegistration/actions/workflows/docker-publish.yml/badge.svg)](https://github.com/CerberusGaming/WoWSimpleRegistration/actions/workflows/docker-publish.yml)

## Usage

---

#### Repository

You can use `ghcr.io/cerberusgaming/wowsimpleregistration:master` in your projects.

#### Install the image:

```shell
docker pull ghcr.io/cerberusgaming/wowsimpleregistration:master
```

#### Run the container

```shell
docker run -d --name wowsimpleregistration -p "8080:80" ghcr.io/cerberusgaming/wowsimpleregistration:master
```

### Optional

#### Get the container logs

```shell
docker logs -f wowsimpleregistration
```

#### Stop the container

```shell
docker stop wowsimpleregistration
```

#### Remove the container

```shell
docker rm wowsimpleregistration
```

## Variables

---

| Variable               | `$config[key]`         | Default Value                                           | Description |
|------------------------|------------------------|---------------------------------------------------------|-------------|
| 2FA_SUPPORT            | 2fa_support            | `false`                                                 |             |
| BASEURL                | baseurl                | `http://localhost`                                      |             |
| BATTLENET_SUPPORT      | battlenet_support      | `false`                                                 |             |
| CAPTCHA_KEY            | captcha_key            | ``                                                      |             |
| CAPTCHA_LANGUAGE       | captcha_language       | `en`                                                    |             |
| CAPTCHA_SECRET         | captcha_secret         | ``                                                      |             |
| CAPTCHA_TYPE           | captcha_type           | `0`                                                     |             |
| DB_AUTH_DBNAME         | db_auth_dbname         | `realmd`                                                |             |
| DB_AUTH_HOST           | db_auth_host           | `127.0.0.1`                                             |             |
| DB_AUTH_PASS           | db_auth_pass           | `root`                                                  |             |
| DB_AUTH_PORT           | db_auth_port           | `3306`                                                  |             |
| DB_AUTH_USER           | db_auth_user           | `root`                                                  |             |
| DEBUG_MODE             | debug_mode             | `false`                                                 |             |
| DISABLE_CHANGEPASSWORD | disable_changepassword | `false`                                                 |             |
| DISABLE_ONLINE_PLAYERS | disable_online_players | `false`                                                 |             |
| DISABLE_TOP_PLAYERS    | disable_top_players    | `false`                                                 |             |
| EXPANSION              | expansion              | `2`                                                     |             |
| GAME_VERSION           | game_version           | `3.3.5a (12340)`                                        |             |
| LANGUAGE               | language               | `english`                                               |             |
| MULTIPLE_EMAIL_USE     | multiple_email_use     | `false`                                                 |             |
| PAGE_TITLE             | page_title             | `Simple Register`                                       |             |
| PATCH_LOCATION         | patch_location         | `http://mypatch.com/patch.mpq`                          |             |
| REALMLIST              | realmlist              | `logon.myserver.com`                                    |             |
| SCRIPT_VERSION         | script_version         | `2.0.2`                                                 |             |
| SERVER_CORE            | server_core            | `0`                                                     |             |
| SMTP_AUTH              | smtp_auth              | `true`                                                  |             |
| SMTP_HOST              | smtp_host              | `smtp1.example.com`                                     |             |
| SMTP_MAIL              | smtp_mail              | `no-reply@example.com`                                  |             |
| SMTP_PASS              | smtp_pass              | `SECRET`                                                |             |
| SMTP_PORT              | smtp_port              | `587`                                                   |             |
| SMTP_SECURE            | smtp_secure            | `tls`                                                   |             |
| SMTP_USER              | smtp_user              | `user@example.com`                                      |             |
| SOAP_2D_COMMAND        | soap_2d_command        | `account set 2fa {USERNAME} off`                        |             |
| SOAP_2E_COMMAND        | soap_2e_command        | `account set 2fa {USERNAME} {SECRET}`                   |             |
| SOAP_ASA_COMMAND       | soap_asa_command       | `account set addon {USERNAME} {EXPANSION}`              |             |
| SOAP_CA_COMMAND        | soap_ca_command        | `account create {USERNAME} {PASSWORD}`                  |             |
| SOAP_CP_COMMAND        | soap_cp_command        | `account set password {USERNAME} {PASSWORD} {PASSWORD}` |             |
| SOAP_FOR_REGISTER      | soap_for_register      | `false`                                                 |             |
| SOAP_HOST              | soap_host              | `127.0.0.1`                                             |             |
| SOAP_PASSWORD          | soap_password          | `admin_soap`                                            |             |
| SOAP_PORT              | soap_port              | `7878`                                                  |             |
| SOAP_STYLE             | soap_style             | `SOAP_RPC`                                              |             |
| SOAP_URI               | soap_uri               | `urn:MaNGOS`                                            |             |
| SOAP_USERNAME          | soap_username          | `admin_soap`                                            |             |
| SRP6_SUPPORT           | srp6_support           | `true`                                                  |             |
| TEMPLATE               | template               | `light`                                                 |             |
| VOTE_SYSTEM            | vote_system            | `true`                                                  |             |

## Realmlists

---
wip
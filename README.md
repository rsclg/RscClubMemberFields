[![Latest Version on Packagist](http://img.shields.io/packagist/v/rsclg/club-member-fields.svg?style=flat)](https://packagist.org/packages/rsclg/club-member-fields)
[![Installations via composer per month](http://img.shields.io/packagist/dm/rsclg/club-member-fields.svg?style=flat)](https://packagist.org/packages/rsclg/club-member-fields)
[![Installations via composer total](http://img.shields.io/packagist/dt/rsclg/club-member-fields.svg?style=flat)](https://packagist.org/packages/rsclg/club-member-fields)

Contao Extension: RscClubMemberFields
=====================================

Provides club specific adaptation of Contao member management:

- Extension of `tl_member` for additional club fields
- Automatic generation of the next free member number
- Set default values for new members
- Adjustment of filter, search and sorting


Installation
------------

Install the extension via composer: [rsclg/club-member-fields](https://packagist.org/packages/rsclg/club-member-fields).

If you prefer to install it manually, download the latest release here: https://github.com/rsclg/RscClubMemberFields/releases

### Database modification

Execute the following database script to define some views:

```
-- add view that are expected from contao
CREATE OR REPLACE VIEW v_tl_member AS SELECT tl_member.*, CONCAT(tl_member.firstname, ' ', tl_member.lastname) as name, (SELECT GROUP_CONCAT(mg.name ORDER BY mg.name SEPARATOR ', ') FROM tl_member_group mg JOIN tl_member_to_group m2g ON mg.id = m2g.group_id WHERE m2g.member_id = tl_member.id) as member_groups FROM tl_member;
CREATE OR REPLACE VIEW rcb2cto_users (id, name, tstamp) AS SELECT user_id, username, created FROM rcb_users;
```


Tracker
-------

https://github.com/rsclg/RscClubMemberFields/issues


Compatibility
-------------

- min. Contao version: >= 3.2.0
- max. Contao version: <  3.6.0


Dependency
----------

There are no dependencies to other extensions, that have to be installed.
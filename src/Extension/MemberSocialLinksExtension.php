<?php

namespace Burnbright\SocialLinks;

use SilverStripe\Core\Extension;

/**
 * Social Link Member Extension
 */
class MemberSocialLinksExtension
        extends Extension {

    private static $many_many = array(
        "SocialLinks" => SocialLink::class
    );

}

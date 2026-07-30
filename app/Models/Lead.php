<?php

namespace App\Models;

/**
 * Admin-facing alias for contact form submissions.
 */
class Lead extends Contact
{
    protected $table = 'contacts';
}

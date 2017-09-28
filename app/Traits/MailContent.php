<?php

namespace App\Traits;

use App\MailTemplate;

trait MailContent
{
    public $mailContent;

    /**
     * Get MailTemplateName
     *
     * @return string
     */
    public function setMailContent()
    {
        $pieces = preg_split('/(?=[A-Z])/', class_basename($this), -1, PREG_SPLIT_NO_EMPTY);
        $mailTemplateName = strtolower(implode('.', $pieces));

        $mailTemplate = MailTemplate::where('name', $mailTemplateName)->first();

        if(!$mailTemplate){
            $mailTemplate = MailTemplate::where('name', 'default')->first();
        }

        $this->mailContent = $mailTemplate->content;
    }
}
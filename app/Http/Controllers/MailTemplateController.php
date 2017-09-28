<?php

namespace App\Http\Controllers;

use App\MailTemplate;
use App\Events\Mailable\MailTemplateUpdated;
use Illuminate\Http\Request;

class MailTemplateController extends Controller
{
    public function index()
    {
        $templates = MailTemplate::all();

        return view('mailTemplates.list', [
            'title' => 'Templates list',
            'templates' => $templates,
        ]);
    }

    public function getTemplate( $templateId )
    {
        $template = MailTemplate::where('id', $templateId)->first();

        if( !$template )
            abort(404);

        return
            view('mailTemplates.edit', [
            'title' => 'Edit ' . $template->name . ' template',
            'template' => $template
        ]);
    }

    public function putEditTemplate( $id, Request $request )
    {
        $this->validate($request, [
            'content' => 'required|min:100'
        ]);

        // $id or $request['templateId']
        $template = MailTemplate::find($id);

        $message = "Wrong ID";

        if($template)
        {
            //set new content
            $template->content = $request['content'];
            $template->update();

            $message = $template->name . ' template update successful!';
        }

        //trigger event
        event(new MailTemplateUpdated($template));

        return
            redirect(route('mail-template.all'))
            ->with([
                'message' => $message
            ]);
    }
}

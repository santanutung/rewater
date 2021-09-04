<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footersetting;
Use App\Models\contactpage_setting;

class SiteFontendSettingCommentsController extends Controller
{
  public function footer_show(){
       $footer_settings= Footersetting::find(1);
      return view('admin.settings.footer.form',compact('footer_settings'));
  }

    public function footer_update(Request $request)
    {

        $footer_settings = Footersetting::find(1);
        $request->validate([
            'footer_one_tittle' => 'required',
            'footer_one_email' => 'required'
        ]);

        $footer_settings = Footersetting::find(1);
        $footer_settings->update([
            'footer_one_tittle' => $request->footer_one_tittle,
            'footer_one_email' => $request->footer_one_email,
            'footer_one_phone' => $request->footer_one_phone,
            'footer_one_tittle_2' => $request->footer_one_tittle_2,
            'footer_two_tittle'=> $request->footer_two_tittle,
            'footer_three_tittle'=> $request->footer_three_tittle,
            'footer_three_text'=> $request->footer_three_text,
            'social_icon_1'=>$request->social_icon_1,
            'social_icon_link_1' => $request->social_icon_link_1,
            'social_icon_2'=>$request->social_icon_2,
            'social_icon_link_2' => $request->social_icon_link_2,
            'social_icon_3'=>$request->social_icon_3,
            'social_icon_link_3' => $request->social_icon_link_3,
            'social_icon_4'=>$request->social_icon_4,
            'social_icon_link_4' => $request->social_icon_link_4,
            'footer_copyright'=> $request->footer_copyright
        ]);
        toastr()->success('Footer settings is  updated successfully', 'Success');
        return back();

    }

    public function contactpage_show()
    {
        $contactpage_setting = contactpage_setting::find(1);
        return view('admin.settings.contactpage', compact('contactpage_setting'));
    }

    public function contactpage_update(Request $request)
    {

        // return  $request->all();

        $request->validate([
            'about_tittle' => 'required',
            'about_text' => 'required',
            'contact_tittle' => 'required',
            'contact_address' => 'required',
            'contact_phone_1' => 'required',
            'contact_email_1' => 'required',
            'contact_button_text' => 'required'

        ]);

        $contactpage_setting = contactpage_setting::find(1);

        $contactpage_setting->update([
            'about_tittle' => $request->about_tittle,
            'about_text' => $request->about_text,
            'contact_tittle' => $request->contact_tittle,
            'contact_address' => $request->contact_address,
            'contact_phone_1' => $request->contact_phone_1,
            'contact_phone_2' => $request->contact_phone_2,
            'contact_email_1' => $request->contact_email_1,
            'contact_email_2' => $request->contact_email_2,
            'contact_button_text' => $request->contact_main_tittle,
            'contact_main_tittle' => $request->contact_main_tittle,
            'contact_main_text' => $request->contact_main_text,
            'hello_text' => $request->hello_text


        ]);

        // $table->text('about_tittle')->nullable();
        // $table->text('about_text')->nullable();
        // $table->text('contact_tittle')->nullable();
        // $table->text('')->nullable();
        // $table->text('')->nullable();
        // $table->text('')->nullable();
        // $table->text('')->nullable();
        // $table->text('')->nullable();
        // $table->text('')->nullable();
        // $table->text('')->nullable();
        toastr()->success('Contact page settings is  updated successfully', 'Success');
        return back();
    }

}


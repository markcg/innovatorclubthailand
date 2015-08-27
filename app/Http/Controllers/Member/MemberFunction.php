<?php

namespace App\Http\Controllers\Member;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use CURLFile;
use App\cURL;
use Illuminate\Http\Request;
use App\Models\Member\Member;
use App\Models\Member\Profile;
use App\Models\Member\Role;
use App\Models\Member\Joining;
use App\Models\Member\Skill;
use App\Models\Member\Experience;
use App\Models\Member\Need;
use App\Models\Member\Contact;
use App\Models\Member\Social;

define("IsMember", 1);
define("NewMember", 2);
define("HasProfile", 3);
define("HasRole", 4);
define("HasJoining", 5);
define("HasSkill", 6);
define("HasExperience", 7);
define("HasNeed", 8);
define("HasContact", 9);
define("HasSocial", 10);
define("HasDetail", 11);

class MemberFunction {

    //------ New Data ---------------

    function AddMember(Request $request) {
        try {
            $member = new Member();
            $member->Email = $request->Email;
            $member->Password = Hash::make($request->Password);
            $member->Status = NewMember;
            $member->save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
            "data" => [
                "MemberId" => $member->id
            ]
        ]);
    }

    function AddProfile(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            if ($member->profile == null) {
                $profile = new Profile();
                $profile->ProjectState = $request->ProjectState;
                $profile->MemberGroup = $request->MemberGroup;
                $profile->PartnerGroup = $request->PartnerGroup;
                $profile->Location = $request->Location;
                $profile->Age = $request->Age;
                if ($request->has('IsStudent')) {
                    $profile->IsStudent = $request->IsStudent;
                }
                $member->profile()->save($profile);
                $member->Status = HasProfile;
                $member->save();
            } else {
                return json_encode([
                    "status" => false,
                    "error" => "Information already exist"
                ]);
            }
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
        ]);
    }

    function AddRole(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            if ($member->role == null) {
                $role = new Role();
                $role->FirstRole = $request->FirstRole;
                if ($request->has('SecondRole') && $request->SecondRole != "") {
                    $role->SecondRole = $request->SecondRole;
                } if ($request->has('ThirdRole') && $request->ThirdRole != "") {
                    $role->ThirdRole = $request->ThirdRole;
                }
                $member->role()->save($role);
                $member->Status = HasRole;
                $member->save();
            } else {
                return json_encode([
                    "status" => false,
                    "error" => "Information already exist"
                ]);
            }
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
        ]);
    }

    function AddJoining(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            if ($member->role == null) {
                $join = new Joining();
                if ($request->has('OpenToJoin')) {
                    $join->OpenToJoin = $request->OpenToJoin;
                } if ($request->has('ReadyToJoin')) {
                    $join->ReadyToJoin = $request->ReadyToJoin;
                }
                $member->joining()->save($join);
                $member->Status = HasJoining;
                $member->save();
            } else {
                return json_encode([
                    "status" => false,
                    "error" => "Information already exist"
                ]);
            }
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
        ]);
    }

    function AddSkill(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            if ($member->skill == null) {
                $skill = new Skill();
                $skill->Finance = $request->Finance;
                $skill->Managing = $request->Managing;
                $skill->Marketing = $request->Marketing;
                $skill->ProductM = $request->ProductM;
                $skill->Sales = $request->Sales;
                $skill->Technical = $request->Technical;
                //
                $skill->FinanceNeed = $request->FinanceNeed;
                $skill->ManagingNeed = $request->ManagingNeed;
                $skill->MarketingNeed = $request->MarketingNeed;
                $skill->ProductMNeed = $request->ProductMNeed;
                $skill->SalesNeed = $request->SalesNeed;
                $skill->TechnicalNeed = $request->TechnicalNeed;
                $member->skill()->save($skill);
                $member->Status = HasSkill;

                $member->save();
            } else {
                return json_encode([
                    "status" => false,
                    "error" => "Information already exist"
                ]);
            }
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
        ]);
    }

    function AddExperience(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            if ($member->experience == null) {
                $experience = new Experience();
                $experience->FirstIndustry = $request->FirstIndustry;
                $experience->FirstExperience = $request->FirstExperience;
                if ($request->has('SecondIndustry') && $request->has('SecondExperience')) {
                    $experience->SecondIndustry = $request->SecondIndustry;
                    $experience->SecondExperience = $request->SecondExperience;
                }
                if ($request->has('ThirdIndustry') && $request->has('ThirdExperience')) {
                    $experience->ThirdIndustry = $request->ThirdIndustry;
                    $experience->ThirdExperience = $request->ThirdExperience;
                }
                $member->experience()->save($experience);
                $member->Status = HasExperience;

                $member->save();
            } else {
                return json_encode([
                    "status" => false,
                    "error" => "Information already exist"
                ]);
            }
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
        ]);
    }

    function AddNeed(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            if ($member->need == null) {
                $need = new Need();
                $need->Investment = $request->Investment;
                $need->TimeCommit = $request->TimeCommit;
                $need->PartnerFirstRole = $request->PartnerFirstRole;
                if ($request->has('PartnerSecondRole')) {
                    $need->PartnerSecondRole = $request->PartnerSecondRole;
                }
                if ($request->has('PartnerThirdRole')) {
                    $need->PartnerThirdRole = $request->PartnerThirdRole;
                }
                $member->need()->save($need);
                $member->Status = HasNeed;

                $member->save();
            } else {
                return json_encode([
                    "status" => false,
                    "error" => "Information already exist"
                ]);
            }
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
        ]);
    }

    function AddContact(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            if ($member->contact == null) {
                $contact = new Contact();
                $contact->Mobile = $request->Mobile;
                $contact->Skype = $request->Skype;
                $contact->Line = $request->Line;
                $member->contact()->save($contact);
                $member->Status = HasContact;

                $member->save();
            } else {
                return json_encode([
                    "status" => false,
                    "error" => "Information already exist"
                ]);
            }
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
        ]);
    }

    function AddSocial(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            if ($member->social == null) {
                $social = new Social();
                $social->Facebook = $request->Facebook;
                $social->Twitter = $request->Twitter;
                $social->Google = $request->Google;
                $member->social()->save($social);
                $member->Status = HasSocial;

                $member->save();
            } else {
                return json_encode([
                    "status" => false,
                    "error" => "Information already exist"
                ]);
            }
        } catch (Exception $e) {

            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
        ]);
    }

    //--------------Edit-----------------------
    function EditMember(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            $member->Email = $request->Email;
            $member->save();
        } catch (Exception $e) {
            return json_encode([

                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
            "data" => [
                "MemberId" => $member->id
            ]
        ]);
    }

    function EditProfile(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            $member->profile->ProjectState = $request->ProjectState;
            $member->profile->MemberGroup = $request->MemberGroup;
            $member->profile->PartnerGroup = $request->PartnerGroup;
            $member->profile->Location = $request->Location;
            $member->profile->Age = $request->Age;
            if ($request->has('IsStudent')) {
                $member->profile->IsStudent = $request->IsStudent;
            }
            $member->profile->save();

            $member->
                    save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
        ]);
    }

    function EditRole(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            $member->role->FirstRole = $request->FirstRole;
            if ($request->has('SecondRole') && $request->SecondRole != "") {
                $member->role->SecondRole = $request->SecondRole;
            } if ($request->has('ThirdRole') && $request->ThirdRole != "") {
                $member->role->ThirdRole = $request->ThirdRole;
            }
            $member->role->save();

            $member->
                    save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
        ]);
    }

    function EditJoining(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            if ($request->has('OpenToJoin')) {
                $member->join->OpenToJoin = $request->OpenToJoin;
            } if ($request->has('ReadyToJoin')) {
                $member->join->ReadyToJoin = $request->ReadyToJoin;
            }
            $member->joining->save();

            $member->
                    save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
        ]);
    }

    function EditSkill(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            $member->skill = new Skill();
            $member->skill->Finance = $request->Finance;
            $member->skill->Managing = $request->Managing;
            $member->skill->Marketing = $request->Marketing;
            $member->skill->ProductM = $request->ProductM;
            $member->skill->Sales = $request->Sales;
            $member->skill->Technical = $request->Technical;
            //
            $member->skill->FinanceNeed = $request->FinanceNeed;
            $member->skill->ManagingNeed = $request->ManagingNeed;
            $member->skill->MarketingNeed = $request->MarketingNeed;
            $member->skill->ProductMNeed = $request->ProductMNeed;
            $member->skill->SalesNeed = $request->SalesNeed;
            $member->skill->TechnicalNeed = $request->TechnicalNeed;
            $member->skill->save();

            $member->
                    save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
        ]);
    }

    function EditExperience(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            $member->experience->FirstIndustry = $request->FirstIndustry;
            $member->experience->FirstExperience = $request->FirstExperience;
            if ($request->has('SecondIndustry') && $request->has('SecondExperience')) {
                $member->experience->SecondIndustry = $request->SecondIndustry;
                $member->experience->SecondExperience = $request->SecondExperience;
            }
            if ($request->has('ThirdIndustry') && $request->has('ThirdExperience')) {
                $member->experience->ThirdIndustry = $request->ThirdIndustry;
                $member->experience->ThirdExperience = $request->ThirdExperience;
            }
            $member->experience->save();

            $member->
                    save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
        ]);
    }

    function EditNeed(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            $member->need->Investment = $request->Investment;
            $member->need->TimeCommit = $request->TimeCommit;
            $member->need->PartnerFirstRole = $request->PartnerFirstRole;
            if ($request->has('PartnerSecondRole')) {
                $member->need->PartnerSecondRole = $request->PartnerSecondRole;
            }
            if ($request->has('PartnerThirdRole')) {
                $member->need->PartnerThirdRole = $request->PartnerThirdRole;
            }
            $member->need->save();

            $member->
                    save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
        ]);
    }

    function EditContact(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            $member->contact->Mobile = $request->Mobile;
            $member->contact->Skype = $request->Skype;
            $member->contact->Line = $request->Line;
            $member->contact->save();

            $member->
                    save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
        ]);
    }

    function EditSocial(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            $member->social->Mobile = $request->Mobile;
            $member->social->Skype = $request->Skype;
            $member->social->Line = $request->Line;
            $member->social->save();

            $member->save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
        ]);
    }

    function EditDetail(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            $member->profile->Firstname = $request->Firstname;
            $member->profile->Middlename = $request->Middlename;
            $member->profile->Lastname = $request->Lastname;
            $member->profile->About = $request->About;
            $member->profile->Video = $request->Video;

            $member->profile->save();
            $member->Status = HasDetail;

            $member->
                    save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
            "data" => [
                "MemberId" => $member->id
            ],
        ]);
    }

    function EditImage(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            $img = Image::make($request->file('Image'));
            $member->profile->Image = $img->encode('data-url');
            $member->profile->save();
            $member->save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
        ]);
    }

    function EditImageEncoded(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            $member->profile->Image = $request->Image;
            $member->profile->save();
            $member->save();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
        ]);
    }

//Other
    function DeleteMember(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            $member->profile->delete();
            $member->role->delete();
            $member->joining->delete();
            $member->skill->delete();
            $member->experience->delete();
            $member->need->delete();
            $member->contact->delete();
            $member->social->delete();
            $member->delete();
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
        ]);
    }

    function CompleteSetup(Request $request) {
        try {
            $member = Member::findOrFail($request->MemberId);
            $member->Status = IsMember;
            $member->save();
            Session::put("Member", $member);
        } catch (Exception $e) {
            return json_encode([
                "status" => false,
                "error" => $e
            ]);
        }
        return json_encode([
            "status" => true,
            "data" => [
                "MemberId" => $member->id
            ],
        ]);
    }

}

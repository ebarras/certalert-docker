<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

use App\Agency;
use App\Agreement;
use App\Certificate;
use App\Contact;

class TestCertificates extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Create some test Agencies
        $agency = new Agency;
        $agency->name_abbreviated = 'FSA';
        $agency->name_long = 'Farm Service Agency';
        $agency->save();

        	$agreement = new Agreement;
      		$agreement->name = 'FSA0322';
      		$agreement->save();
      		$agreement->agency()->associate($agency);

      			$contact = new Contact;
      			$contact->email = "test.user1.@usda.gov";
      			$contact->phone = "913-111-1111";
      			$contact->save();
      			$contact->agreements()->attach($agreement);
      			

        $agency = new Agency;
        $agency->name_abbreviated = 'FS';
        $agency->name_long = 'Forest Service';
        $agency->save();

        	$agreement = new Agreement;
      		$agreement->name = 'FSX1908';
      		$agreement->save();
      		$agreement->agency()->associate($agency);

      			$contact = new Contact;
      			$contact->email = "test.user2.@usda.gov";
      			$contact->phone = "913-222-2222";
      			$contact->save();
      			$contact->agreements()->attach($agreement);

      			$contact = new Contact;
      			$contact->email = "test.user3.@usda.gov";
      			$contact->phone = "913-333-3333";
      			$contact->save();
      			$contact->agreements()->attach($agreement);

      		$agreement = new Agreement;
      		$agreement->name = 'FSX2405';      		
      		$agreement->save();
      		$agreement->agency()->associate($agency);

        $agency = new Agency;
        $agency->name_abbreviated = 'OCIO';
        $agency->name_long = 'Office of the Chief Information Officer';
        $agency->save();

        	$agreement = new Agreement;
      		$agreement->name = 'OIR9959';
      		$agreement->save();
      		$agreement->agency()->associate($agency);

      		$certificate = new Certificate;
      		$certificate->subject = 'usda.gov';
      		$certificate->expiration_date = Carbon::parse('2020-02-19T12:00:00.000000Z');
      		$certificate->valid_from_date = Carbon::parse('2018-11-20T00:00:00.000000Z');
      		$certificate->issuer = 'GeoTrust RSA CA 2018';
      		$certificate->fingerprint = '56a0d8217262e2d2d130ecdd35159c0288998ef9';
      		$certificate->san = json_encode(["usda.gov","www.peoplesgarden.usda.gov","www.nationalhungerclearinghouse.fns.usda.gov","www.myplate.gov","www.usda.gov","www.nhc.fns.usda.gov","www.commodityfoods.usda.gov","www.choosemyplate.gov","wicnss.fns.usda.gov","www.professionalstandards.fns.usda.gov","www.whatscooking.usda.gov","snaped.fns.usda.gov","www.snaptoskills.fns.usda.gov","teamnutrition.usda.gov","peoplesgarden.usda.gov","nationalhungerclearinghouse.fns.usda.gov","wicworks.fns.usda.gov","farmtoschoolcensus.fns.usda.gov","newfarmers.usda.gov","ocio.usda.gov","cloudfiles.ocio.usda.gov","www.cnpp.usda.gov","www.healthymeals.fns.usda.gov","nhc.fns.usda.gov","lovingsupport.fns.usda.gov","fns.usda.gov","www.summerfood.usda.gov","www.summerfoods.usda.gov","www.ocio.usda.gov","snaptoskills.fns.usda.gov","professionalstandards.fns.usda.gov","www.whatscooking.fns.usda.gov","whatscooking.fns.usda.gov","www.teamnutrition.usda.gov","healthymeals.fns.usda.gov","www.fns.usda.gov"]);
      		$certificate->agreement()->associate($agreement);
      		$certificate->save();
    }
}

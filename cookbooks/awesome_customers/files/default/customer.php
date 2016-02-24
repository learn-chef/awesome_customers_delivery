<?php
class Customer {
  public $id;
  public $first_name;
  public $last_name;
  public $email;
  public $latitude;
  public $longitude;
  public function __construct($id, $first_name, $last_name, $email, $latitude, $longitude) {
    $this->id = $id;
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->email = $email;
    $this->latitude = $latitude;
    $this->longitude = $longitude;
  }
}
function get_sample_customers() {
  return array(
    new Customer("7561c990-815e-4d45-ad0e-e13e631a807a", "Jane", "Smith", "jane.smith@example.com", 41.52190, -90.57580),
    new Customer("7cb6b4b6-318a-446d-81b4-95b70bcda560", "Dave", "Richards", "dave.richards@example.com", 27.341274, -82.528267),
    new Customer("78e4a713-862f-446a-bf8a-3d40538ef406", "Virginia", "Gaffney", "virginia.gaffney@example.com", -33.918861, 18.423300),
    new Customer("3249880c-9cee-42f4-8065-53f49e6cad06", "Kalem", "Kennedy", "kalem.kennedy@example.com", 47.00000, -123.80000),
    new Customer("26acf907-0eb7-4a12-a757-768285b1ea03", "Kelis", "Stackhouse", "kelis.stackhouse@example.com", 9.00000, 38.73330),
    new Customer("b862ff81-6433-4856-9213-485e9472b584", "Tabitha", "Jeffers", "tabitha.jeffers@example.com", 31.19000, 29.95000),
    new Customer("c5d185ff-6ab3-4269-afc2-456bfd960159", "Brendon", "Zimmerman", "brendon.zimmerman@example.com", 35.37500, -119.02200),
    new Customer("1915fb5e-f587-4a95-accc-249394d193e4", "Lavana", "Spearman", "lavana.spearman@example.com", 39.91660, 116.38330),
    new Customer("b461807a-66fd-4bac-bfc8-56dd23be1109", "Gene", "Paine", "gene.paine@example.com", -33.865143, 151.209900),
    new Customer("34e1c7bb-ad5f-40b8-bb16-606e4ad8f529", "Jai", "Pendergrass", "jai.pendergrass@example.com", 52.19000, 0.17000),
    new Customer("b5600174-f965-4586-a28e-176af8b255b9", "Lenny", "Quigley", "lenny.quigley@example.com", 11.56670, 43.00000),
    new Customer("db722364-4364-4f52-8732-76645335eb03", "Montserrat", "Messenger", "montserrat.messenger@example.com", -45.93330, 170.20000),
    new Customer("afb5701c-b7c1-48f1-b17e-57c97cca6c7a", "Belle", "Williford", "belle.williford@example.com", 33.58330, 130.45000),
    new Customer("3889ff58-0674-4b54-89c7-84cfcb7cda4a", "Vincent", "Ramirez", "vincent.ramirez@example.com", 43.90000, 1.86670),
    new Customer("549874df-befc-4813-b6ef-c196408d3f7b", "Minerva", "Nickerson", "minerva.nickerson@example.com", -12.117880, -77.033043),
    new Customer("b9eb431d-1fdd-4e0b-a4d1-574addd8264c", "Germaine", "Hawthorne", "germaine.hawthorne@example.com", 33.61670, 73.10000),
    new Customer("c5dc9d05-b4ad-423a-8057-269b68e12aee", "Preston", "Oakley", "preston.oakley@example.com", 27.81670, 85.35000),
    new Customer("9bdf6367-df6d-43cc-8e48-74afa0158372", "Jada", "Trammell", "jada.trammell@example.com", -12.389614, 130.852264),
    new Customer("19bbe947-4c76-4335-b016-5677ca73daae", "Theo", "Tam", "theo.tam@example.com", 6.25000, -10.35000),
    new Customer("97fe2352-f1e6-4b3d-b3d2-9747fe03524b", "Aster", "Epstein", "aster.epstein@example.com", -1.28320, 36.81670),
    new Customer("96d293a0-e387-404a-8254-99244e50da1d", "Anita", "Graham", "anita.graham@example.com", 50.08330, 14.43330),
    new Customer("0be50bd0-e661-47f7-a17f-469f30010a53", "Joni", "Young", "joni.young@example.com", -22.45000, -42.71700),
    new Customer("31d95f97-3f0d-43fc-809c-0ed80fb82244", "Abbi", "Bravo", "abbi.bravo@example.com", 60.29000, 5.22000),
    new Customer("d9d86c43-ab92-4028-a2b0-034e01893979", "Luna", "Pak", "luna.pak@example.com", 39.7392, -104.9903),
    new Customer("fbf015f4-e50b-4860-ab66-cdecd94e8083", "Abdul", "Dahl", "abdul.dahl@example.com", 30.210768,	-97.654724)
  );
}
?>

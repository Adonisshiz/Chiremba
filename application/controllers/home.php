<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
        $this->load->library('form_validation');
	}
	
	
	//Testing controller for indexing documents
	public function createDocuments(){
		autoload_elastica();
		$elasticaClient = new \Elastica\Client();
		// Load index
		$elasticaIndex = $elasticaClient->getIndex('games');

		// Create index
		$elasticaIndex->create(array(), true);

		// Get type
		$elasticaType = $elasticaIndex->getType('game');

		// Games
		$game1 = array(
				'name'      => 'World of Warcraft',
				'description' => 'World of Warcraft (often abbreviated as WoW) is a massively multiplayer online role-playing game (MMORPG) by Blizzard Entertainment' );

		$game2 = array('name' => 'StarCraft',
				'description' => 'StarCraft is a military science fiction real-time strategy video game developed and published by Blizzard Entertainment');

		// Document addition
				$gameDocument1 = new Elastica\Document("1",$game1);
				$gameDocument2 = new Elastica\Document("2",$game2);

		// Add games to type
		$elasticaType->addDocument($gameDocument1);
		$elasticaType->addDocument($gameDocument2);
	}

		
	public function createDocuments2(){
		autoload_elastica();
		$elasticaClient = new \Elastica\Client();
		// Load index
		$elasticaIndex = $elasticaClient->getIndex('illness');

		// Create index
		$elasticaIndex->create(array(), true);

		// Get type
		$elasticaType = $elasticaIndex->getType('illness');

		// Games
		$illness1 = array(
				'name'      => 'Malaria',
				'description' => 'Malaria or also known as Mahalaria is a dangerous illness caused by Mosquito bites',
				'symptom'	=> array(
									'english'	=> 'hypertension, faver, coldsweats, drowsiness',
									'shona'		=>	'kuneta, kupisa muviri, kutonhoreswa, kunzwa kuneta'
									),
				'treatment'	=>	'The doctor will probably give you prescription medication and bla bla bla',
				'drugs'	=>	'Cloroquin, Cotranoxasol',
				'ranking'	=>	'5'
				);

		$illness2 = array(
				'name'      => 'Tuberculosis',
				'description' => 'Tuberculosis or also known as T.B is a dangerous illness caused by heavy smoking bites',
				'symptom'	=> array(
									'english'	=> 'coughing, sputum, coldsweats, sneezing',
									'shona'		=>	'kukosora, kupfira pfira, kutonhoreswa, kuhetsura'
									),
				'treatment'	=>	'The doctor will probably give you prescription medication and bla bla bla',
				'drugs'	=>	'Woods',
				'ranking'	=>	'3'
				);

		// Document addition
				$illnessDocument1 = new Elastica\Document("1",$illness1);
				$illnessDocument2 = new Elastica\Document("2",$illness2);

		// Add games to type
		$elasticaType->addDocument($illnessDocument1);
		$elasticaType->addDocument($illnessDocument2);
	}	
	
	
	public function json($search){
		autoload_elastica();
	$elasticaClient = new \Elastica\Client();
	
	// Load index
	$elasticaIndex = $elasticaClient->getIndex('illness');

	//get the search query
	$value = $search;

	// Define a Query. We want a string query.
	$elasticaQueryString = new Elastica\Query\QueryString();
	$elasticaQueryString->setQuery((string)$value);

	// Create the actual search object with some data.
	$elasticaQuery = new Elastica\Query();
	$elasticaQuery->setQuery($elasticaQueryString);

	//Search on the index.
	$elasticaResultSet = $elasticaIndex->search($elasticaQuery);
	
	//result time!!!
	$elasticaResults = $elasticaResultSet->getResults();
	
	
	//return $elasticaResults;
	//loop through results and display them
	foreach ($elasticaResults as $elasticaResult) {
				$result = $elasticaResult->getData();
				//echo $result["symptom"]["english"];
				echo json_encode($result);
				echo "<br/>";
				}
	}
	
	public function index(){
        $this->form_validation->set_rules('question','Question','trim|required|xss_clean|htmlspecialchars');
        if($this->form_validation->run()==FALSE){
            $this->load->view('app');
        }else{
            if(!$this->input->post('question')){
                $this->load->view('app');
            }else{
                //$questionArray = $this->createWordsArrayFromQuestion($question);
				$data["searchResults"] = $this->search($this->input->post('question'));
				$data["question"] = $this->input->post('question');
				$this->load->view('app2.php',$data);
			}
         }   
	}
	
	public function search($search){
	autoload_elastica();
	$elasticaClient = new \Elastica\Client();
	
	// Load index
	$elasticaIndex = $elasticaClient->getIndex('illness');

	//get the search query
	$value = $search;

	// Define a Query. We want a string query.
	$elasticaQueryString = new Elastica\Query\QueryString();
	$elasticaQueryString->setQuery((string)$value);

	// Create the actual search object with some data.
	$elasticaQuery = new Elastica\Query();
	$elasticaQuery->setQuery($elasticaQueryString);

	//Search on the index.
	$elasticaResultSet = $elasticaIndex->search($elasticaQuery);
	
	//result time!!!
	$elasticaResults = $elasticaResultSet->getResults();
	
	return $elasticaResults;
	//loop through results and display them
	//foreach ($elasticaResults as $elasticaResult) {
				//$result = $elasticaResult->getData();
				//echo $result["symptom"]["english"];
				//var_dump($result);
				//echo "<br/>";
	//}
	}
	
	
	
	
	
	
	
			
			/*
				$symptomsArray = explode(" ", $savedSymptoms);
                foreach($symptomsArray as $symptom){
					for($i=0; $i<count($questionArray); $i++){
						if($symptom == $questionArray[$i]){
							//echo $questionArray[$i];
							//echo "found";
							//echo "<br/>";
							$row = $this->getSickness();
							//echo $row;
							
							$treatment = $this->getTreatment($row);
							//echo $treatment;
							
						}
					}
				}
				if($treatment==null)
				$data = array	(
								'treatment' => $treatment
								);
				$this->load->view('app_results',$data);
            }
			*/
    //$ansa = $this->search_engine_model->reply($question);
	
	//public function findAssociatedPotentialIllness($symptom){
	//	$illnes = $this->search_engine_model->search($symptom);
	//	var_dump($illnes);
	//}
	

    public function createWordsArrayFromQuestion($question){
        $keyWords = explode(" ", $question);
        return $keyWords;
    }

    public function getSymptoms(){
        $symptoms = $this->marwadzoe_model->getSymptoms();
        return $symptoms->symptoms;
    }
	public function getSickness(){
        $symptoms = $this->search_engine_model->getSymptoms();
        return $symptoms->sickness;
    }
	public function getTreatment($row){
        $symptoms = $this->search_engine_model->getSymptoms($row);
        return $symptoms->treatment;
    }
	
	public function jsone($question){
		if(!$question){
			return null;
            }else{
                $questionArray = $this->splitQuestion($question);
                $savedSymptoms = $this->getSymptoms();
                $symptomsArray = explode(" ", $savedSymptoms);

                foreach($symptomsArray as $symptom){
					for($i=0; $i<count($questionArray); $i++){
						if($symptom == $questionArray[$i]){
							//echo $questionArray[$i];
							//echo "found";
							//echo "<br/>";
							$row = $this->getSickness();
							//echo $row;
							
							$treatment = $this->getTreatment($row);
							//echo $treatment;
							echo json_encode($treatment);
						}
					}
				}

			}
		}
	}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
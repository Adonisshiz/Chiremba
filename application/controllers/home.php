<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
        $this->load->library('form_validation');
	}
	
	public function index(){
        $this->form_validation->set_rules('question','Question','trim|required|xss_clean|htmlspecialchars');
        if($this->form_validation->run()==FALSE){
            $this->load->view('app');
        }else{
            $question = $this->input->post('question');

            if(!$question){
                $this->load->view('app');
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
							
						}
					}
				}
				if($treatment==null)
				$data = array	(
								'treatment' => $treatment
								);
				$this->load->view('app_results',$data);
            }

            //$ansa = $this->search_engine_model->reply($question);
        }
    }
	
	//public function findAssociatedPotentialIllness($symptom){
	//	$illnes = $this->search_engine_model->search($symptom);
	//	var_dump($illnes);
	//}
	
	public function login(){
        
        $this->form_validation->set_rules('username','Username','trim|required|min_length[6]|max_length[25]|xss_clean|htmlspecialchars');
        $this->form_validation->set_rules('password','Password','trim|required');
        
         if($this->form_validation->run()==FALSE)
        {
            $this->load->view('login');
        }
        else
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $founduser = $this->login_model->find_user($username, $password);
            
            if(!$founduser)
            {
                $data['no_user'] = 'Incorrect Username and Password combination. Please try again';
                $this->load->view('login',$data);
            }else{
			   $data = array(
                   'username'=> $this->input->post('username'),
                   'is_logged_in'=>TRUE,
				   'company' => $founduser
               );
			   $this->session->set_userdata($data);
               redirect(backend);
            }
        }
    }
	
	public function logout() {
        //before logging out, store a users cart contents in the database
        //$this->session->unset_userdata('is_logged_in'); <- this way other variables will still be accessible, but for what? lol
		$this->session->sess_destroy();
        redirect('home');
    }

    public function splitQuestion($question){
        $keyWords = explode(" ", $question);
        return $keyWords;
    }

    public function getSymptoms(){
        $symptoms = $this->search_engine_model->getSymptoms();
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
	
	public function json($question){
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

/* End of file welcome.php */
/* Location: ./application/controllers/home.php */
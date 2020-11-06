 <?php
class careu extends Controller
{
    public function __construct()
    {
        
        $this->userModel = $this->model('verifymodel');
    }

    public function index()
    {
        //echo "Home page";

        // $users = $this->userModel->getUsers();

        // $data = [
        //     'title' => 'Home page',
        //     'users' => $users
        // ];
        $this->view('pages/index');
    }

    public function verify()
    {
        $connection = mysqli_connect('localhost','root','','careu');
        $userName=mysqli_real_escape_string($connection,$_POST['username']);
        $password=mysqli_real_escape_string($connection,$_POST['password']);
          
        if(strpos($userName, "admin"))
        {
            $userInfo=$this->userModel->getUserAdmin($userName,$password);
            if($userInfo)
            {
                session_start();
                $_SESSION['userName']=$userName;
                echo "success";
            }
            else
            {
                echo "failed";
            }
        }
        else if(strpos($userName, "119"))
        {
            $userInfo=$this->userModel->getUser119($userName,$password);
            if($userInfo)
            {
                session_start();
                $_SESSION['userName']=$userName;
                echo "success";
            }
            else
            {
                echo "failed";
            }
            
        }
        else if(strpos($userName, "1990"))
        {
            $userInfo=$this->userModel->getUser1990($userName,$password);
            if($userInfo)
            {
                session_start();
                $_SESSION['userName']=$userName;
                echo "success";
            }
            else
            {
                echo "failed";
            }
        }
        else
        {
            echo "failed";
        }   
    }
}
?>
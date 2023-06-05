<?phpclass adminsampleworks extends controller{    public function __construct()    {        if (!model::checkadmin()) {            header("location: " . URL . "/login");        }    }    public function index()    {        $sampleworks = $this->model->paginate();        $paginateRows = $this->model->paginateRows();        $data = [            'sampleworks' => $sampleworks,            'paginateRows' => $paginateRows,        ];        $this->viewUrl('admin/sampleworks/index', $data);    }    public function create()    {        $services = $this->model->get_services();        $data = ['services' => $services];        $this->viewUrl('admin/sampleworks/create', $data);    }    public function add()    {        if (isset($_POST['title']) && $_POST['description'] && $_FILES['image'] && $_POST['service']) {            $this->model->add_sampleworks($_POST['title'], $_POST['description'], $_FILES['image'], $_POST['service']);        }        header('location: ' . URL . '/adminsampleworks/create');    }    public function edit($id)    {        $services = $this->model->get_services();        $samplework = $this->model->get_samplework($id);        $data = ['samplework' => $samplework , 'services' => $services];        $this->viewUrl('admin/sampleworks/edit', $data);    }    public function update($id)    {        if (isset($_POST['title']) && $_POST['description']&& $_POST['service']) {            $this->model->update_sampleworks($id, $_POST['title'], $_POST['description'], $_FILES['image'], $_POST['service']);        }        header('location: ' . URL . '/adminsampleworks/edit/' . $id);    }    public function delete($id)    {        $samplework = $this->model->get_samplework($id);        $this->model->delete_samplework($id , $samplework['image']);        header('location: ' . URL . '/adminsampleworks');    }}
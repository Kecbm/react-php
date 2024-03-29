<?php
echo 'Hello, World in Bitrix24';

error_reporting(E_ALL);
ini_set('display_errors', 1);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");

/* //  OBS.: Comentando o código do CRUD em PHP para desenvolver a integração com o Bitrix24

include 'DbConnect.php';
$objDb = new DbConnect;
$conn = $objDb->connect();

$method = $_SERVER['REQUEST_METHOD'];

switch($method) {
    case "GET":
        $sql = "SELECT * FROM company";
        $path = explode('/', $_SERVER['REQUEST_URI']);
        if (isset($path[3]) && is_numeric($path[3])) {
            $sql .= " WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $path[3]);
            $stmt->execute();
            $company = $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $company = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        echo json_encode($company);
        break;

    case "POST":
        $company = json_decode( file_get_contents('php://input') );
        $sql = "INSERT INTO company(id, name, email, CNPJ, corporate_name, annual_recipe, name_first_contact, last_name_first_contact, name_second_contact, last_name_second_contact, created_at) VALUES (null, :name, :email, :CNPJ, :corporate_name, :annual_recipe, :name_first_contact, :last_name_first_contact, :name_second_contact, :last_name_second_contact, :created_at)";
        $stmt = $conn->prepare($sql);
        $created_at = date('Y-m-d');

        // Coreção do erro de integração com o Bitrix24: Warning: Creating default object from empty value
        $company->name = 'Padaria';
        $company->email = 'Padaria@email.com';
        $company->CNPJ = 11111111;
        $company->corporate_name = 'Padaria Garanhuns';
        $company->annual_recipe = 10000;
        $company->name_first_contact = 'José';
        $company->last_name_first_contact = 'Silva';
        $company->name_second_contact = 'Camila';
        $company->last_name_second_contact = 'Silvestre';

        $stmt->bindParam(':name', $company->name);
        $stmt->bindParam(':email', $company->email);
        $stmt->bindParam(':CNPJ', $company->CNPJ);
        $stmt->bindParam(':corporate_name', $company->corporate_name);
        $stmt->bindParam(':annual_recipe', $company->annual_recipe);
        $stmt->bindParam(':name_first_contact', $company->name_first_contact);
        $stmt->bindParam(':last_name_first_contact', $company->last_name_first_contact);
        $stmt->bindParam(':name_second_contact', $company->name_second_contact);
        $stmt->bindParam(':last_name_second_contact', $company->last_name_second_contact);
        $stmt->bindParam(':created_at', $created_at);

        // Continuação do erro de integração com o Bitrix24: Creating default object from empty value on line 40 {"status":1,"message":"Record creeated sucessfully."}
        if($stmt->execute()) {
            $response = ['status' => 1, 'message' => 'Record creeated sucessfully.'];
        } else {
            $response = ['status' => 0, 'message' => 'Failed to create record.'];
        }

        echo json_encode($response);
        break;
    
    case "PUT":
        $company = json_decode( file_get_contents('php://input') );
        $sql = "UPDATE company SET name = :name, email =:email, CNPJ =:CNPJ, corporate_name =:corporate_name, annual_recipe =:annual_recipe, name_first_contact =:name_first_contact, last_name_first_contact =:last_name_first_contact, name_second_contact =:name_second_contact, last_name_second_contact =:last_name_second_contact, updated_at =:updated_at WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $updated_at = date('Y-m-d');
        $stmt->bindParam(':id', $company->id);
        $stmt->bindParam(':name', $company->name);
        $stmt->bindParam(':email', $company->email);
        $stmt->bindParam(':CNPJ', $company->CNPJ);
        $stmt->bindParam(':corporate_name', $company->corporate_name);
        $stmt->bindParam(':annual_recipe', $company->annual_recipe);
        $stmt->bindParam(':name_first_contact', $company->name_first_contact);
        $stmt->bindParam(':last_name_first_contact', $company->last_name_first_contact);
        $stmt->bindParam(':name_second_contact', $company->name_second_contact);
        $stmt->bindParam(':last_name_second_contact', $company->last_name_second_contact);
        $stmt->bindParam(':updated_at', $updated_at);

        if($stmt->execute()) {
            $response = ['status' => 1, 'message' => 'Record updated sucessfully.'];
        } else {
            $response = ['status' => 0, 'message' => 'Failed to updated record.'];
        }

        echo json_encode($response);
        break;
    
    case "DELETE":
        $sql = "DELETE FROM company WHERE id = :id";
        $path = explode('/', $_SERVER['REQUEST_URI']);

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $path[3]);

        if($stmt->execute()) {
            $response = ['status' => 1, 'message' => 'Record deleted sucessfully.'];
        } else {
            $response = ['status' => 0, 'message' => 'Failed to delete record.'];
        }

        echo json_encode($response);
        break;
}  
 */
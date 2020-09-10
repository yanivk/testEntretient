class Product
{
//recupere le prix HT d’un produit
public function getPriceWithoutTax(): ?float
{
    return $this->priceWithoutTax;
}
//Modifie le prix HT d’un produit
public function setPriceWithoutTax(float $priceWithoutTax): self
{
    $this->priceWithoutTax = $priceWithoutTax;

    return $this;
}
}
*************************Class client**********************************
class Client
{
//recupere le statut d’un client
public function getStatus(): ?string
{
    return $this->status;
}
//Modifie le statut d’un client
public function setStatus(string $status): self
{
    $this->status = $stauts;

    return $this;
}

//recupere le produit d’un client
public function getProduct(string $produt): ?string
{
    $this->product = $product;

    return $this;
}

}

/************************Connection BDD******************************/
Public function getAllClients(Client $client){
	*
	*
	*
	//allClients est un array contenant tous les clients
	Return $allClients;
}



**********************Base de travail********************************
class changePriceProduct{
	$newPrice = 15;

public function changePrice(Client $client){
	$TableauClients = getAllClients($client);
	foreach($TableauClients as $val)
	{
		if($val->getStatus() == "changement"){
			$clients->getProduct()->setPriceWithoutTax($newPrice);	
		}
	}
}
}

<?php
namespace Ecompassaro\Site;

class Manager
{
    private $repository;

    /**
     *
     * @param SiteRepository $repository
     */
    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Obtem o Repository dessa entidade
     * @return SiteRepository
     */
    private function getRepository()
    {
        return $this->repository;
    }

    /**
     * Obtem um objeto com as informações do primeiro site cadastrado
     * @return Site
     */
    public function obterPrimeiroSite()
    {
        return $this->getRepository()->findFirst();
    }

    /**
     * Salva o site passado por parâmetro
     * @param Site $site
     */
    public function salvar(Site $site)
    {
        return $this->getRepository()->save($site);
    }
}
<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FolhaCamara
 *
 * @ORM\Table(name="folha_camara")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FolhaCamaraRepository")
 */
class FolhaCamara
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="mes", type="integer", nullable=false)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="ano", type="integer", nullable=false)
     */
    private $ano;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="string", length=255, nullable=false)
     */
    private $cargo;

    /**
     * @var string
     *
     * @ORM\Column(name="vinculo", type="string", length=255, nullable=false)
     */
    private $vinculo;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @var float
     *
     * @ORM\Column(name="remuneracao_fixa", type="float", precision=10, scale=2, nullable=false)
     */
    private $remuneracaoFixa;

    /**
     * @var float
     *
     * @ORM\Column(name="vantagens_pessoais", type="float", precision=10, scale=2, nullable=false)
     */
    private $vantagensPessoais;

    /**
     * @var float
     *
     * @ORM\Column(name="remuneracao_eventual", type="float", precision=10, scale=2, nullable=false)
     */
    private $remuneracaoEventual;

    /**
     * @var float
     *
     * @ORM\Column(name="abono_permanencia", type="float", precision=10, scale=2, nullable=false)
     */
    private $abonoPermanencia;

    /**
     * @var float
     *
     * @ORM\Column(name="descontos", type="float", precision=10, scale=2, nullable=false)
     */
    private $descontos;

    /**
     * @var float
     *
     * @ORM\Column(name="outros_diarias", type="float", precision=10, scale=2, nullable=false)
     */
    private $outrosDiarias;

    /**
     * @var float
     *
     * @ORM\Column(name="outros_auxilios", type="float", precision=10, scale=2, nullable=false)
     */
    private $outrosAuxilios;

    /**
     * @var float
     *
     * @ORM\Column(name="outros_vantagens", type="float", precision=10, scale=2, nullable=false)
     */
    private $outrosVantagens;

    public function getId(): int {
        return $this->id;
    }

    public function getMes(): int {
        return $this->mes;
    }

    public function getAno(): int {
        return $this->ano;
    }

    public function getCargo(): string {
        return $this->cargo;
    }

    public function getVinculo(): string {
        return $this->vinculo;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getRemuneracaoFixa(): float {
        return $this->remuneracaoFixa;
    }

    public function getVantagensPessoais(): float {
        return $this->vantagensPessoais;
    }

    public function getRemuneracaoEventual(): float {
        return $this->remuneracaoEventual;
    }

    public function getAbonoPermanencia(): float {
        return $this->abonoPermanencia;
    }

    public function getDescontos(): float {
        return $this->descontos;
    }

    public function getOutrosDiarias(): float {
        return $this->outrosDiarias;
    }

    public function getOutrosAuxilios(): float {
        return $this->outrosAuxilios;
    }

    public function getOutrosVantagens(): float {
        return $this->outrosVantagens;
    }
}


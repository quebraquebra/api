<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SenadoFolha
 *
 * @ORM\Table(name="folha_senado")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FolhaSenadoRepository")
 */
class FolhaSenado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=100, nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="ano", type="string", nullable=false)
     */
    private $ano;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mes", type="boolean", nullable=false)
     */
    private $mes;

    /**
     * @var string
     *
     * @ORM\Column(name="servidor", type="string", length=160, nullable=false)
     */
    private $servidor;

    /**
     * @var string
     *
     * @ORM\Column(name="ano_admissao", type="string", nullable=false)
     */
    private $anoAdmissao;

    /**
     * @var string
     *
     * @ORM\Column(name="vinculo", type="string", length=100, nullable=false)
     */
    private $vinculo;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="string", length=100, nullable=false)
     */
    private $cargo;

    /**
     * @var string
     *
     * @ORM\Column(name="padrao", type="string", length=10, nullable=false)
     */
    private $padrao;

    /**
     * @var string
     *
     * @ORM\Column(name="especialidade", type="string", length=100, nullable=false)
     */
    private $especialidade;

    /**
     * @var string
     *
     * @ORM\Column(name="situacao", type="string", length=100, nullable=false)
     */
    private $situacao;

    /**
     * @var string
     *
     * @ORM\Column(name="remuneracao_basica", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $remuneracaoBasica;

    /**
     * @var string
     *
     * @ORM\Column(name="vantagens_pessoais", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $vantagensPessoais;

    /**
     * @var string
     *
     * @ORM\Column(name="funcao_cargo_comissao", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $funcaoCargoComissao;

    /**
     * @var string
     *
     * @ORM\Column(name="gratificacao_natalina", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $gratificacaoNatalina;

    /**
     * @var string
     *
     * @ORM\Column(name="horas_extras", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $horasExtras;

    /**
     * @var string
     *
     * @ORM\Column(name="outras_remuneracoes_eventuais", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $outrasRemuneracoesEventuais;

    /**
     * @var string
     *
     * @ORM\Column(name="adicional_periculosidade", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $adicionalPericulosidade;

    /**
     * @var string
     *
     * @ORM\Column(name="adicional_noturno", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $adicionalNoturno;

    /**
     * @var string
     *
     * @ORM\Column(name="abono_permanencia", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $abonoPermanencia;

    /**
     * @var string
     *
     * @ORM\Column(name="reversao_teto_constitucional", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $reversaoTetoConstitucional;

    /**
     * @var string
     *
     * @ORM\Column(name="imposto_renda", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $impostoRenda;

    /**
     * @var string
     *
     * @ORM\Column(name="psss", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $psss;

    /**
     * @var string
     *
     * @ORM\Column(name="faltas", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $faltas;

    /**
     * @var string
     *
     * @ORM\Column(name="diarias", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $diarias;

    /**
     * @var string
     *
     * @ORM\Column(name="auxilio_alimentacao", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $auxilioAlimentacao;

    /**
     * @var string
     *
     * @ORM\Column(name="outras_vantagens_indenizatorias", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $outrasVantagensIndenizatorias;

    /**
     * @var string
     *
     * @ORM\Column(name="licenca_premio", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $licencaPremio;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * @return string
     */
    public function getAno(): string
    {
        return $this->ano;
    }

    /**
     * @return boolean
     */
    public function isMes(): bool
    {
        return $this->mes;
    }

    /**
     * @return string
     */
    public function getServidor(): string
    {
        return $this->servidor;
    }

    /**
     * @return string
     */
    public function getAnoAdmissao(): string
    {
        return $this->anoAdmissao;
    }

    /**
     * @return string
     */
    public function getVinculo(): string
    {
        return $this->vinculo;
    }

    /**
     * @return string
     */
    public function getCargo(): string
    {
        return $this->cargo;
    }

    /**
     * @return string
     */
    public function getPadrao(): string
    {
        return $this->padrao;
    }

    /**
     * @return string
     */
    public function getEspecialidade(): string
    {
        return $this->especialidade;
    }

    /**
     * @return string
     */
    public function getSituacao(): string
    {
        return $this->situacao;
    }

    /**
     * @return string
     */
    public function getRemuneracaoBasica(): string
    {
        return $this->remuneracaoBasica;
    }

    /**
     * @return string
     */
    public function getVantagensPessoais(): string
    {
        return $this->vantagensPessoais;
    }

    /**
     * @return string
     */
    public function getFuncaoCargoComissao(): string
    {
        return $this->funcaoCargoComissao;
    }

    /**
     * @return string
     */
    public function getGratificacaoNatalina(): string
    {
        return $this->gratificacaoNatalina;
    }

    /**
     * @return string
     */
    public function getHorasExtras(): string
    {
        return $this->horasExtras;
    }

    /**
     * @return string
     */
    public function getOutrasRemuneracoesEventuais(): string
    {
        return $this->outrasRemuneracoesEventuais;
    }

    /**
     * @return string
     */
    public function getAdicionalPericulosidade(): string
    {
        return $this->adicionalPericulosidade;
    }

    /**
     * @return string
     */
    public function getAdicionalNoturno(): string
    {
        return $this->adicionalNoturno;
    }

    /**
     * @return string
     */
    public function getAbonoPermanencia(): string
    {
        return $this->abonoPermanencia;
    }

    /**
     * @return string
     */
    public function getReversaoTetoConstitucional(): string
    {
        return $this->reversaoTetoConstitucional;
    }

    /**
     * @return string
     */
    public function getImpostoRenda(): string
    {
        return $this->impostoRenda;
    }

    /**
     * @return string
     */
    public function getPsss(): string
    {
        return $this->psss;
    }

    /**
     * @return string
     */
    public function getFaltas(): string
    {
        return $this->faltas;
    }

    /**
     * @return string
     */
    public function getDiarias(): string
    {
        return $this->diarias;
    }

    /**
     * @return string
     */
    public function getAuxilioAlimentacao(): string
    {
        return $this->auxilioAlimentacao;
    }

    /**
     * @return string
     */
    public function getOutrasVantagensIndenizatorias(): string
    {
        return $this->outrasVantagensIndenizatorias;
    }

    /**
     * @return string
     */
    public function getLicencaPremio(): string
    {
        return $this->licencaPremio;
    }
}


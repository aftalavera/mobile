<?php
class Funcionarios extends CI_model{
	public function __construct()	{		parent::__construct();		$this->load->database();	}		public function get_coordinador_summary()	{		$query = $this->db->query('select precinto,municipio,sum(meta) meta,sum(total) total,sum(faltan) faltan, sum(neto) neto, round(avg(case when porciento > 1 then 1 else porciento end)*100,2) porciento from coordinador_sumary group by precinto with rollup');		$result=$query->result();		//Model view formating the fourth layer		foreach ($result as $row){			$row->meta = number_format($row->meta);			$row->total = number_format($row->total);		}		return $result;	}		public function get_funcionario_summary()	{		$query = $this->db->query('select precinto,municipio,sum(meta) meta,sum(total) total,sum(faltan) faltan, sum(neto) neto, round(avg(case when porciento > 1 then 1 else porciento end)*100,2) porciento from funcionario_sumary group by precinto with rollup');		$result=$query->result();				//Model view formating the fourth layer		foreach ($result as $row){			$row->meta = number_format($row->meta);			$row->total = number_format($row->total);			$row->faltan = number_format($row->faltan);			$row->neto = number_format($row->neto);		}		return $result;	}		
	public function get_summary()	{		$query = $this->db->query('			select c.precinto,c.municipio name,			round(ifnull(sum(case when cv.total > c.coordinadores then c.coordinadores else cv.total end),0)/sum(c.coordinadores)*100,2) coordinador,			round(ifnull(sum(case when fv.total > c.funcionarios then c.funcionarios else fv.total end),0)/sum(c.funcionarios)*100,2) funcionario			from cuota c			left join (select precinto,unidad,count(*) total from funcionarios_funcionario where actual_id in (3,4) group by precinto,unidad) cv on c.precinto=cv.precinto and c.unidad=cv.unidad			left join (select precinto,unidad,count(*) total from funcionarios_funcionario where actual_id in (2) group by precinto,unidad) fv on c.precinto=fv.precinto and c.unidad=fv.unidad			group by c.precinto');		return $query->result();	}		public function get_summary_header($precinto)	{		$query = $this->db->query('			select c.precinto,c.municipio name,			round(ifnull(sum(case when cv.total > c.coordinadores then c.coordinadores else cv.total end),0)/sum(c.coordinadores)*100,2) coordinador,			round(ifnull(sum(case when fv.total > c.funcionarios then c.funcionarios else fv.total end),0)/sum(c.funcionarios)*100,2) funcionario			from cuota c			left join (select precinto,unidad,count(*) total from funcionarios_funcionario where actual_id in (3,4) group by precinto,unidad) cv on c.precinto=cv.precinto and c.unidad=cv.unidad			left join (select precinto,unidad,count(*) total from funcionarios_funcionario where actual_id in (2) group by precinto,unidad) fv on c.precinto=fv.precinto and c.unidad=fv.unidad			where c.precinto=? group by c.precinto',$precinto);		return $query->row();	}	public function get_list($precinto,$unidad,$type)	{		if ($type == 'f') {			$type = '2';		} else		{			$type = '3,4';		};					$query = $this->db->query('			select paterno,materno,nombre,celular,trabajo			from funcionarios_funcionario			where precinto=? and unidad=? and actual_id in ('.$type.')			order by nombre,paterno,materno',array($precinto,$unidad));		return $query->result();	}			public function get_detail($precinto)	{		$query = $this->db->query('			select c.unidad,c.municipio name,c.precinto,			round(ifnull(sum(case when cv.total > c.coordinadores then c.coordinadores else cv.total end),0)/sum(c.coordinadores)*100,2) coordinador,			round(ifnull(sum(case when fv.total > c.funcionarios then c.funcionarios else fv.total end),0)/sum(c.funcionarios)*100,2) funcionario			from cuota c			left join (select precinto,unidad,count(*) total from funcionarios_funcionario where actual_id in (3,4) group by precinto,unidad) cv on c.precinto=cv.precinto and c.unidad=cv.unidad			left join (select precinto,unidad,count(*) total from funcionarios_funcionario where actual_id in (2) group by precinto,unidad) fv on c.precinto=fv.precinto and c.unidad=fv.unidad			where c.precinto=? group by c.unidad',$precinto);		return $query->result();	}
			public function get_grand_summary()	{		$query = $this->db->query('select round(avg(case when f.porciento > 1 then 1 else f.porciento end)*100,2) funcionario,round(avg(case when c.porciento > 1 then 1 else c.porciento end)*100,2) coordinador from precinto p inner join coordinador_sumary c on c.precinto=p.precinto inner join funcionario_sumary f on f.precinto=p.precinto');		return $query->result();	}		
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class FaqModel extends Model
{
    protected $table      = 'faq';
    protected $primaryKey = 'faq_id';
    protected $allowedFields = [
        'faq_questions',
        'faq_answer'
    ];
    public function countFaq()
    {
        $builder = $this->db->table($this->table);
        $jumlahfaq = $builder->countAllResults();
        return $jumlahfaq;
    }
    public function getFaq()
    {
        $builder = $this->db->table($this->table);
        $getFaq = $builder->get()->getResultArray();
        return $getFaq;
    }
    public function addFaq($data)
    {
        $builder = $this->db->table($this->table);
        $addFaq = $builder->insert($data);
        return $addFaq;
    }
    public function idFaq($faq_id)
    {
        $builder = $this->db->table($this->table);
        $idFaq = $builder->getWhere(['faq_id' => $faq_id])->getResultArray();
        return $idFaq;
    }
    public function updateFaq($faq_id, $data)
    {
        $builder = $this->db->table($this->table);
        $updateFaq = $builder->update($data, array('faq_id' => $faq_id));
        return $updateFaq;
    }
    public function deleteFaq($faq_id)
    {
        $builder = $this->db->table('$this->table');
        $deleteFaq = $builder->delete(array('id' => $faq_id));
        return $deleteFaq;
    }
}

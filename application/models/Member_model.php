<?php
class Member_model extends CI_Model {
    public function addmember()
    {
        $data = array(
			'm_name' => $this->input->post('m_name'),
			'm_lname' => $this->input->post('m_lname')

		);

		$query=$this->db->insert('tbl_member',$data);

        if($query)
        {
            echo 'add ok';
        }
        else
        {
            echo 'false';
        }
		
		
		 
    }
    public function editmember()
    {   //1.
        $data = array(
			'm_name' => $this->input->post('m_name'),
			'm_lname' => $this->input->post('m_lname'),
            'm_id' => $this->input->post('m_id')
		);
        $sql = "UPDATE tbl_member SET m_name = ?,m_lname = ? WHERE m_id = ?";
        $query=$this->db->query($sql,$data);
        //2.
        // $data = array(
		// 	'm_name' => $this->input->post('m_name'),
		// 	'm_lname' => $this->input->post('m_lname')
        // );
        // $this->db->where('m_id',$this->input->post('m_id'));
		// $query=$this->db->update('tbl_member',$data);

        // if($query)
        // {
        //     echo 'edit ok';
        // }
        // else
        // {
        //     echo 'false';
        // }
		
		
		 
    }

    public function showdata()
    {
            $query = $this->db->get('tbl_member');
            return $query->result();
    }

    public function showdata2()//INNER JOIN
    {
        $this->db->select('m.*,p.*');
        $this->db->from('tbl_member as m');
        $this->db->join('tbl_position as p', 'm.pid = p.pid');
        $query = $this->db->get();
        return $query->result();
    }
    public function showdata3()//LEFT JOIN
    {
        $this->db->select('m.m_id,m.m_img,p.pname,m.m_name,m.m_lname,m.m_datesave');
        $this->db->from('tbl_member as m');
        $this->db->join('tbl_position as p', 'm.pid = p.pid','left');
        $query = $this->db->get();
        return $query->result();
    }

    public function showdata4()//WHERE
    {
        $this->db->select('m.*,p.*');
        $this->db->from('tbl_member as m');
        $this->db->join('tbl_position as p', 'm.pid = p.pid');
        $this->db->where('m.m_id', 7);
        $query = $this->db->get();
        return $query->result();
    }
    public function showdata5()//WHERE_IN many show
    {
        $this->db->select('m.m_id,m.m_img,p.pname,m.m_name,m.m_lname,m.m_datesave');
        $this->db->from('tbl_member as m');
        $this->db->join('tbl_position as p', 'm.pid = p.pid','left');
        $this->db->where_in('m.m_id',array(2,7));
    
        $query = $this->db->get();
        return $query->result();
    }

    public function showdata6()//ORDER BY ASC น้อยไปมาก,DESC มากไปน้อย
    {
        $this->db->select('m.m_id,m.m_img,p.pname,m.m_name,m.m_lname,m.m_datesave');
        $this->db->from('tbl_member as m');
        $this->db->join('tbl_position as p', 'm.pid = p.pid','left');
        $this->db->order_by('m.m_id','desc');
        
        $query = $this->db->get();
        return $query->result();
    }

    public function showdata7()//query
    {
        
        $query = $this->db->query("SELECT m.*,p.* FROM tbl_member  as m
        left JOIN tbl_position as p ON m.pid = p.pid
        WHERE m.m_lname = 'op' AND m.m_id = 2;");
        return $query->result();
    }

    public function showdata8()//prepare
    {
        
        $sql = "SELECT m.*,p.* FROM tbl_member  as m
        left JOIN tbl_position as p ON m.pid = p.pid
        WHERE m.m_lname = ? AND m.m_id = ?";
        $query = $this->db->query($sql, array('op',2));
        return $query->result();
    }



    public function read($m_id)
    {
            $this->db->select('*');
            $this->db->from('tbl_member');
            $this->db->where('m_id',$m_id);
            $query = $this->db->get();
            if($query->num_rows() > 0)
            {
                $data = $query->row();
                return $data;
            }
            return FALSE;
    }
    public function deldata($m_id)
    {       //1.
            //$this->db->delete('tbl_member',array('m_id'=>$m_id));
            //2.
            $this->db->query("DELETE FROM tbl_member WHERE m_id = $m_id");
            
    }
    public function addmember2()
    {
         $config['upload_path'] = './img/';
         $config['allowed_types'] = 'gif|jpg|png';
         $config['max_size'] = '2000';
         $config['max_width'] = '3000';
         $config['max_height'] = '3000';
         $config['encrypt_name'] = TRUE;

         $this->load->library('upload',$config);
         if(! $this->upload->do_upload('m_img'))
         {
            echo $this->upload->display_errors();
         }
         else
         {
            $data = $this->upload->data();
            $filename = $data['file_name'];
            $data = array(
                'm_name' => $this->input->post('m_name'),
                'm_lname' => $this->input->post('m_lname'),
                'm_img' => $filename
    
            );
    
            $query=$this->db->insert('tbl_member',$data);
    
            // if($query)
            // {
            //     echo 'add ok';
            // }
            // else
            // {
            //     echo 'false';
            // }
         }
    }

}
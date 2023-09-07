<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Utility\Text;
use Cake\Network\Exception\InternalErrorException;
use Cake\ORM\TableRegistry;



/**
 * Uploadprostepsimgs component
 */
class UploadentregasreqsrefsimgsComponent extends Component
{
    public $max_files = 3;

	public function upload($data,$galeria) 
	{
		
		if (count($data) > $this->max_files) {
			$this->_registry->getController()->Flash->error('Limite de arquivos excedidos.');

		return $this->_registry->getController()->redirect(['controller' => 'projetosentregasreqsrefsimgs','action' => 'addid',$galeria]);
								$this->registry->getController()->Flash->error('Type of file not is allowed: "'.$file['type'].'"');

			//return $this->_registry->getController()->redirect(['action' => 'add']);
		}

		foreach ($data as $file) 
		{
			$filenameoriginal = $file['name'];
			$filename = $file['name'];
			$file_tmp_name = $file['tmp_name'];
			$file_ext = substr(strchr($filename,'.'),1);
            
			$dir = WWW_ROOT.'img'.DS.'entregasreqsrefsimgs'.DS.$galeria;
            //var_dump($dir);
			
			$type_allowed = array('PNG','png','jpg','jpeg','gif','pptx','xls','xlsx','pdf','doc','docx','sql','prc','zip');
					if (!in_array($file_ext, $type_allowed)) 
					{
						var_dump($filename);
						//exit;

						$this->registry->getController()->Flash->error('Type of file not is allowed: "'.$file['type'].'"');

					//->original:	return $this->_registry->getController()->redirect(['action'=>'add');

						return $this->_registry->getController()->redirect(['controller' => 'projetosentregasreqsrefsimgs','action' => 'add',$galeria]);

						//return $this->_registry->getController()->redirect(['controller'=>'projetosprodutosentregas','action' => 'view',$galeria]);


						//return $this->redirect(['controller'=>'Projetos','action' => 'view',$id]);
					}
					elseif (is_uploaded_file($file_tmp_name)) 
					{
								$filename = Text::uuid().'.'.$file_ext;
								$filenameid = $galeria.'.'.$file_ext;
								$file_db = TableRegistry::get('Projetosentregasreqsrefsimgs');
								$entity = $file_db -> newEntity();                                
								$entity->imagem = $filenameoriginal;
								$entity->imagemoriginal = $filenameoriginal;
								$entity->imagempath = $dir;
								$entity->url = $dir.DS.$filenameoriginal;
								$entity->imagemid = $filenameid;
								//var_dump($filename);
                                // atribuindo o objeto colletor
								$entity->projetosentregasreqsref_id = $galeria;
								$file_db->save($entity);
								
								//move_uploaded_file($file_tmp_name, $dir.DS.$filename);
								move_uploaded_file($file_tmp_name, $dir.DS.$filenameoriginal);
								//move_uploaded_file($file_tmp_name, $dir.DS.$filenameid);


					}
					else 
					{
					$this->registry->getController()->Flash->error(__('The image could not be saved. Please, try again.'));
					//return $this->_registry->getController()->redirect(['action' => 'index']);

					return $this->_registry->getController()->redirect(['controller'=>'projetosentregasreqsrefs','action' => 'view',$galeria]);	
					}

		}
		$this->_registry->getController()->Flash->success('The images has been saved.');
		//return $this->_registry->getController()->redirect(['action' => 'index']);

		return $this->_registry->getController()->redirect(['controller'=>'Projetosentregasreqsrefs','action' => 'view',$galeria]);	
		}
}

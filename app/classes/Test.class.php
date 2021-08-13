<?php
/** \file
 *  \brief Classe model for users table.
 *
 *  This is a sample class for users table. You can delete it from your project and write your own.
 *
 *  \ingroup  models
 *  \author   Fernando Val - fernando.val@gmail.com
 */
use Springy\Model;
use Springy\Security\AclUserInterface;
use Springy\Security\IdentityInterface;

class Test extends Model
{
    protected $tableName = 'tests';
    protected $writableColumns = ['id', 'name',  'deleted'];
    protected $insertDateColumn = 'created_at';
    protected $deletedColumn = 'deleted';

    protected $permissions = [];

}

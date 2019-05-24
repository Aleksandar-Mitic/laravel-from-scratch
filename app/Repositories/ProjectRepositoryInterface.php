<?php

namespace BasicLaravel\Repositories;


interface ProjectRepositoryInterface
{

    /**
     * @return mixed
     */
    public function createProject($attributes);

    // /**
    //  * Get's a project by it's ID
    //  *
    //  * @param int
    //  */
    // public function get($project_id);

    // /**
    //  * Get's all projects.
    //  *
    //  * @return mixed
    //  */
    // public function all();

    // *
    //  * Deletes a project.
    //  *
    //  * @param int

    // public function delete($project_id);

    // /**
    //  * Updates a project.
    //  *
    //  * @param int
    //  * @param array
    //  */
    // public function update($project_id, array $project_data);

}

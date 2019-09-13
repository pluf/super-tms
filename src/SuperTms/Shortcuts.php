<?php

function SuperTms_Shortcuts_NormalizeItemPerPage ($request)
{
    $count = array_key_exists('_px_c', $request->REQUEST) ? intval($request->REQUEST['_px_c']) : 30;
    if($count > 30)
        $count = 30;
    return $count;
}

function SuperTms_Shortcuts_GetTenantFeildProperties(){
    return array(
        'tenant' => array(
            'type' => 'Pluf_DB_Field_Foreignkey',
            'model' => 'Pluf_Tenant',
            'is_null' => false,
            'editable' => false,
            'relate_name' => 'tenant',
            'graphql_feild' => true
        )
    );
}

/**
 * Checks if given model is blong to tenant determined in $request or $match
 * @param Pluf_HTTP_Request $request
 * @param array $match
 * @param Pluf_Model $model a model with tenant feild
 * @return Pluf_HTTP_Error404|true true if given model is blong to tenant else throw exception
 */
function SuperTms_Shortcuts_CheckTenant($request, $match, $model){
    $tenant = null;
    if(isset($request->REQUEST['tenant'])){
        $tenant = Pluf_Shortcuts_GetObjectOr404('Pluf_Tenant', $request->REQUEST['tenant']);
    }else if(isset($match['tenantId'])){
        $tenant = Pluf_Shortcuts_GetObjectOr404('Pluf_Tenant', $match['tenantId']);
    }
    if(isset($tenant) && $tenant->id !== $model->tenant){
        throw new Pluf_HTTP_Error404('Invalid relation');
    }
    return true;
}
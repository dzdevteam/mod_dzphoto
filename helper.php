<?php
// no direct access
defined('_JEXEC') or die;

abstract class modDZPhotoHelper
{
    /**
     * Helper function to get images from com_dzphoto
     * 
     * @param JRegistry the module params
     * @return JObject[] array of images
     */
    
    public static function getImages($params)
    {
        // Add com_dzphoto models path
        JModelLegacy::addIncludePath(JPATH_SITE.'/components/com_dzphoto/models');
        
        // Get model instance
        $model = JModelLegacy::getInstance('Images', 'DZPhotoModel', array('ignore_request' => true));
        
        $albums = $params->get('filter_albumid', array());
        if (!empty($albums) && is_array($albums)) {
            $model->setState('filter.albumid', $albums);
        }
        
        $ordering = $params->get('filter_order', 'a.created');
        $model->setState($ordering);
        
        $direction = $params->get('filter_order_Dir', 'DESC');
        $model->setState($direction);
        
        $limit = (int) $params->get('listlimit', 0);
        if ($limit) {
            $model->setState('list.limit', $limit);
            $model->setState('list.start', 0);
        }
            
        return $model->getItems();
    }
}

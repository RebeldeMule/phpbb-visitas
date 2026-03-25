<?php
/**
 * RebeldeMule - Visor de visitas - Main Listener
 *
 * @copyright (c) 2026 RebeldeMule
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace rbm\visitas\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/**
	 * Constructor
	 *
	 * @param \phpbb\template\template $template
	 * @param \phpbb\db\driver\driver_interface $db
	 */
	public function __construct(\phpbb\template\template $template, \phpbb\db\driver\driver_interface $db)
	{
		$this->template = $template;
		$this->db = $db;
	}

	/**
	 * Assign functions defined in this class to event listeners in the core
	 *
	 * @return array
	 */
	public static function getSubscribedEvents()
	{
		return array(
            'core.mcp_global_f_read_auth_after' => 'mostrar_visitas_en_mcp'
		);
	}

    public function mostrar_visitas_en_mcp($event)
    {
        $topic_id = $event['topic_id'];
        
		$sql = 'SELECT topic_views FROM ' . TOPICS_TABLE . ' WHERE topic_id = ' . (int) $topic_id;
		$result = $this->db->sql_query($sql);
		$row = $this->db->sql_fetchrow($result);
		$this->db->sql_freeresult($result);

		$visitas = $row ? $row['topic_views'] : 0;

		$this->template->assign_vars(array(
			'TOPIC_VISITS' => $visitas,
		));
    }
}

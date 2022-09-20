SELECT 
	tbl_users.email, 
	tbl_users.name,
	MIN(CASE tbl_users_meta.meta_key
    	WHEN 'ip_address' THEN tbl_users_meta.meta_value
    END) AS `ip_address`,
 	MIN(CASE tbl_users_meta.meta_key
    	WHEN 'referrer' THEN tbl_users_meta.meta_value
    END) AS `referrer`,
    MIN(CASE tbl_users_meta.meta_key
    	WHEN 'user_agent' THEN tbl_users_meta.meta_value
    END) AS `user_agent`,
    GROUP_CONCAT(tbl_users_images.url_path) AS `url_path`
FROM tbl_users INNER JOIN tbl_users_meta
ON tbl_users.id = tbl_users_meta.user_id
INNER JOIN tbl_users_images
ON tbl_users.id = tbl_users_images.user_id
GROUP BY tbl_users.name
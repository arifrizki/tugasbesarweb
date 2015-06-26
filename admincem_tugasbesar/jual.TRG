TYPE=TRIGGERS
triggers='CREATE DEFINER=root@localhost TRIGGER `STOCKUPDATE` AFTER INSERT ON `jual`\n FOR EACH ROW BEGIN \n UPDATE stockbarang SET stok=stok-NEW.stok\n WHERE kode=new.kode;\n END'
sql_modes=524288
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_general_ci'
db_cl_names='latin1_swedish_ci'

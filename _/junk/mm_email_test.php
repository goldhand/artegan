<?php
#			$bcc = "bcc: m_gentzkow@hotmail.com";
			$em_subj = "My special email";
			$em_to = "mar@marsmind.com";
			$em_from = "mar@marsmind.com";
			$em_msg = "Isn't this special?";
#			$em_header = $em_from. "\r\n" .$bcc;
			$em_header = $em_from;

			If (mail($em_to, $em_subj, $em_msg, $em_header)) {
				echo "<br>dat's what I'm tawlkin about!";
			}
			Else
			{
				echo "... ahhh crap!";
			}
?>
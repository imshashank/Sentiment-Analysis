import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.util.HashMap;
import java.util.Map;
import java.util.Scanner;



public class articleAnalysis {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		File file = new  File("/var/www/java/article.txt");
		String article =" ";
		Scanner scanner = null;
		try {
			scanner = new Scanner(file);
		} catch (FileNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	    while (scanner.hasNextLine()) {
	        String line = scanner.nextLine();
	        String tmp = line;
			tmp =tmp.replace("'"," ");
			tmp=tmp.replaceAll("(http://|http://www\\.|www\\.)","");
			//removes all numbers and symbols
			tmp=tmp.replaceAll("[^A-Za-z0-9 ]", "");
			article+=tmp;
			
	    }
	    
		
		
		
		articleAnalysis obj = new articleAnalysis();
		obj.run(article);
	}
	
	public void run(String article) {
		 
		
		
		String csvFile = "/var/www/java/words.csv";
		String csvFile2 = "/var/www/java/finn.csv";
		BufferedReader br = null;
		String line = "";
		String cvsSplitBy = ",";
	 
		try {
	 
			Map<String, String> maps = new HashMap<String, String>();
			Map<String, String> arousal = new HashMap<String, String>();
			Map<String, String> dominance = new HashMap<String, String>();
			Map<String, String> finn = new HashMap<String, String>();
	 
			br = new BufferedReader(new FileReader(csvFile));
			while ((line = br.readLine()) != null) {
	 
				// use comma as separator
				String[] word = line.split(cvsSplitBy);
	 
				maps.put(word[0], word[2]);
				arousal.put(word[0], word[4]);
				dominance.put(word[0], word[6]);
	 
			}
			br = new BufferedReader(new FileReader(csvFile2));
			while ((line = br.readLine()) != null) {
	 
				// use comma as separator
				String[] word = line.split(cvsSplitBy);
	 
				finn.put(word[0], word[1]);
					 
			}
			
			System.out.println(article);
			String values=article;
		
			//jString[] words = values;
			String[] words = values.split(" ");
								
			System.out.println("article has "+words.length+" words");
			int c=0;
			float s=0;
			
			for(int i = 0; i < words.length; i++)
			{
				//String s = words[i];
				
				String number = maps.get((String)words[i]);
				if (number!=null){
					System.out.println("Word= "+words[i] +" Rating: "+number);
					s+=Float.parseFloat(number);
					c++;
				}
				
				
			}
			System.out.println("Found total of "+c+" words in ANEW lexicon");
			float avg=s/c;
			System.out.println(avg);
			c=0;
			s=0;
			for(int i = 0; i < words.length; i++)
			{
				//String s = words[i];
				
				String number = arousal.get((String)words[i]);
				if (number!=null){
					//System.out.println("Word= "+words[i] +" Rating: "+number);
					s+=Float.parseFloat(number);
					c++;
				}
			}
			
			avg=s/c;
			System.out.println(avg);
			c=0;
			s=0;
			for(int i = 0; i < words.length; i++)
			{
				//String s = words[i];
				
				String number = dominance.get((String)words[i]);
				if (number!=null){
					//System.out.println("Word= "+words[i] +" Rating: "+number);
					s+=Float.parseFloat(number);
					c++;
				}
			}
			avg=s/c;
			System.out.println(avg);
			c=0;
			s=0;
			for(int i = 0; i < words.length; i++)
			{
				//String s = words[i];
				
				String number = finn.get((String)words[i]);
				if (number!=null){
					//System.out.println("Word= "+words[i] +" Rating: "+number);
					s+=Float.parseFloat(number);
					System.out.println("Word= "+words[i] +" Rating: "+number);
					c++;
				}
			}
			System.out.println("Found total of "+c+" words in FINN lexicon");
			avg=s/c;
			System.out.println(avg);
			
		/*	Iterate through the whole hash table
		 * 
		 * for (Map.Entry<String, String> entry : maps.entrySet()) {
	 
				//System.out.println("List [word= " + entry.getKey() + " , rating="+ entry.getValue() + "]");
	 
			}
			*/
	 
		} catch (FileNotFoundException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		} finally {
			if (br != null) {
				try {
					br.close();
				} catch (IOException e) {
					e.printStackTrace();
				}
			}
		}
	 
		System.out.println("Done");
	  }

}

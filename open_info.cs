using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class open_info : MonoBehaviour
{
    public Text text;

    // PHPで出力したJsonをUnityのuGUIで表示
public Text[] Ranking = new Text[3];
 
    IEnumerator Start()
    {
        // string url = "localhost:8888/unity/PHP/open_function.php"; //phpfile
        string url = "https://....."; //phpfile

        WWW get = new WWW(url);
        yield return get; //PHPで出力したjson形式の$rankingが変数getに入る

        string json_code = get.text;
        text.text = get.text;
        // IList user_list = (IList)Json.Deserialize(json_code); //jsonをIList型にキャスト

        // int rank = 0;
        // foreach (IDictionary data in user_list)
        // {
        //     rank++;    
        //     var user_name = (string)data["変数1"];
        //     var score = (string)data["変数2"];

        //     float user_score = float.Parse(score);

        //     switch (rank)
        //     {
        //         case 1:
        //             Ranking[0].text = user_name + " SCORE: " + user_score;
        //             break;
        //         case 2:
        //             Ranking[1].text = user_name + " SCORE: " + user_score;
        //             break;
        //         case 3:
        //             Ranking[2].text = user_name + " SCORE: " + user_score;
        //             break;
        //     }
        // }
    }


    // // Start is called before the first frame update
    // void Start()
    // {
        
    // }

    // // Update is called once per frame
    // void Update()
    // {
        
    // }
}

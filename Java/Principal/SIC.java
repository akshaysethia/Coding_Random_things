import java.awt.*;
import java.awt.event.*;
import java.awt.event.ActionListener;
import javax.swing.*;
import javax.swing.border.TitledBorder;
public class SIC extends JFrame {
    private JTextField principal = new JTextField();
    private JTextField rate = new JTextField();
    private JTextField time = new JTextField();
    private JTextField simpleInterest = new JTextField();
    private JButton clear = new JButton("Clear");
    private JButton calculate = new JButton("Calculate");
    JTextArea area = new JTextArea(1, 1);
    public SIC() {
        JPanel panel1 = new JPanel(new GridLayout(5, 5));
        panel1.add(new JLabel("Enter Principal"));
        panel1.add(principal);
        panel1.add(new JLabel("Enter Rate"));
        panel1.add(rate);
        panel1.add(new JLabel("Enter Time"));
        panel1.add(time);
        panel1.add(new JLabel("Simple Interest"));
        panel1.add(simpleInterest);
        panel1.setBorder(new TitledBorder("Enter The Principal, Rate and Time :"));
        principal.setBorder(BorderFactory.createEtchedBorder());
        rate.setBorder(BorderFactory.createEtchedBorder());
        time.setBorder(BorderFactory.createEtchedBorder());
        simpleInterest.setBorder(BorderFactory.createEtchedBorder());
        simpleInterest.setEditable(false);
        simpleInterest.setForeground(Color.RED);
        JPanel panel2 = new JPanel(new FlowLayout(FlowLayout.RIGHT));
        panel2.add(clear);
        panel2.add(calculate);
        add(panel1, BorderLayout.CENTER);
        add(panel2, BorderLayout.SOUTH);
        area.setForeground(Color.BLACK);
        area.setBackground(Color.WHITE);
        area.setLineWrap(true);
        area.setWrapStyleWord(true);
        area.setEditable(false);
        calculate.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                try {
                    double amount = Double.parseDouble(principal.getText());
                    double rateOfInterest = Double.parseDouble(rate.getText());
                    double year = Double.parseDouble(time.getText());
                    String interest = "" + (amount * rateOfInterest * year);
                    simpleInterest.setText((interest));
                } catch (Exception f) {
                    JOptionPane.showMessageDialog(rootPane, "Error: " + (f.getMessage()));
                }
                String amountField = principal.getText();
                String rateOfInterestField = rate.getText();
                String yearField = time.getText();
                if (e.getSource() == calculate) {
                    if ("".equals(amountField) || "".equals(rateOfInterestField) || "".equals(yearField)) {
                        String emptyFieldWarning;
                        emptyFieldWarning = "Empty Feilds !!!";
                        JOptionPane.showMessageDialog(rootPane, emptyFieldWarning);
                    }
                }
            }
        });
        clear.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                try {
                    principal.setText("");
                    rate.setText("");
                    time.setText("");
                    simpleInterest.setText("");
                } catch (Exception f) {
                }
            }
        });
    }
    public static void main(String[] args) {

        SIC calculator = new SIC();
        calculator.setSize(400, 300);
        calculator.setTitle(" Akshay's Calculator ");
        calculator.setResizable(false);
        calculator.setVisible(true);
        calculator.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }
}
